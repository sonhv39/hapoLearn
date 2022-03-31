<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    protected $table = "courses";
    use SoftDeletes;
    protected $fillable = [
        'tilte',
        'description',
        'img_url',
        'price',
    ];
    public function userCourses(){
        return $this->hasMany('App\Models\UserCourse','course_id');
    }
    public function teacherCourses(){
        return $this->hasMany('App\Models\TeacherCourse','course_id');
    }
    public function reviews(){
        return $this->hasMany('App\Models\Review','course_id');
    }
    public function lessons(){
        return $this->hasMany('App\Models\Lesson','course_id');
    }
    public function coursesTag(){
        return $this->hasMany('App\Models\CourseTag','course_id');
    }
}
