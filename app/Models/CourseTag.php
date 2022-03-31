<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseTag extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable = [
        'course_id',
        'tag_id'
    ];

    public function tag()
    {
        $this->belongsTo('App\Models\Tag', 'tag_id');
    }
    
    public function course()
    {
        $this->belongsTo('App\Models\Course', 'course_id');
    }
}
