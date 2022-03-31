<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory;
    protected $table = "lessons";
    use SoftDeletes;
    protected $fillable = [
        'course_id',
        'name',
        'description',
        'time',
        'requirement',
    ];

    public function userLessons()
    {
        $this->hasMany('App\Models\UserLesson', 'lesson_id');
    }

    public function course()
    {
        $this->belongsTo('App\Models\Course', 'course_id');
    }

    public function documents()
    {
        $this->hasMany('App\Models\Document', 'lesson_id');
    }
}
