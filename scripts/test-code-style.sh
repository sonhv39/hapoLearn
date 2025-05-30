#!/bin/bash

echo "Running PHP Code Sniffer..."

# Chạy PHPCS
./vendor/bin/phpcs

# Nếu có lỗi, hỏi người dùng có muốn sửa tự động không
if [ $? -ne 0 ]; then
    echo "Found code style issues. Do you want to fix them automatically? (y/n)"
    read answer
    if [ "$answer" = "y" ]; then
        echo "Fixing code style issues..."
        ./vendor/bin/phpcbf
        echo "Running PHPCS again to check remaining issues..."
        ./vendor/bin/phpcs
    fi
fi 