<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeacherCourse extends Model
{
    use HasFactory;
    protected $table = "teacher_course";
    use SoftDeletes;
    protected $fillable = [
        'course_id',
        'user_id',
    ];

    public function user()
    {
        $this -> belongsTo('App\Models\User', 'user_id', 'id');
    }
    
    public function course()
    {
        $this -> belongsTo('App\Models\Course', 'course_id', 'id');
    }
}
