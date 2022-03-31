<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserLesson extends Model
{
    use HasFactory;
    protected $table = "user_lesson";
    use SoftDeletes;
    protected $fillable =[
        'user_id',
        'lesson_id',
    ];
    public function user(){
        $this->belongsTo('App\Models\User','user_id');
    }
    public function lesson(){
        $this->belongsTo('App\Models\Lesson','lesson_id');
    }
}
