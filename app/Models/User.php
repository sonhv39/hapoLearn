<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phonenumber',
        'address',
        'date_of_birth',
        'username',
        'avata_url',
        'role'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    accesors name để format 1 attr từ csdl lên
    public function  getNameAttribute($name) {
        return strtoupper($name);
    }

//    mutator để formmat mật khẩu trc khi lưu xuống csdl
    public function setPasswordAttribute($password) {
        $this->attributes['password'] = bcrypt($password);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'user_course', 'user_id', 'course_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'user_id');
    }
    
    public function lessons()
    {
        return $this->belongsToMany(Lesson::class, 'user_lesson', 'user_id', 'lesson_id');
    }
}
