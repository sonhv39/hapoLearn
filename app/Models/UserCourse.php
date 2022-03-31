<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserCourse extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'course_id',
        'user_id',
    ];

    public function user()
    {
        $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function course()
    {
        $this->belongsTo('App\Models\Course', 'course_id', 'id');
    }
}
