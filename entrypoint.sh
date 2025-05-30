#!/bin/bash

echo "Starting entrypoint script..."

# Cài đặt composer nếu chưa có vendor
if [ ! -d "vendor" ]; then
    echo "Installing composer dependencies..."
    composer install
fi

# Copy .env nếu chưa có
if [ ! -f ".env" ] && [ -f ".env.example" ]; then
    echo "Copying .env file..."
    cp .env.example .env
fi

# Generate app key nếu chưa có
if ! grep -q "^APP_KEY=base64:" .env; then
    echo "Generating application key..."
    php artisan key:generate
fi

# Cấp quyền cho storage và cache
echo "Setting permissions..."
chmod -R 777 storage bootstrap/cache

# Chạy migrate (bạn có thể bỏ nếu không muốn tự động migrate)
echo "Running migrations..."
php artisan migrate --force || true

echo "Starting PHP-FPM..."
# Khởi động php-fpm
exec php-fpm -F