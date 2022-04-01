<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'course_id',
        'name',
        'description',
        'time',
        'requirement',
    ];

    public function users()
    {
        $this->belongsToMany(User::class, 'user_lesson', 'lesson_id', 'user_id');
    }

    public function course()
    {
        $this->belongsTo(Course::class, 'course_id');
    }

    public function documents()
    {
        $this->hasMany(Document::class, 'lesson_id');
    }
}
