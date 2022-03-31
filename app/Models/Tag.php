<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'tags';
    use SoftDeletes;
    protected $fillable = [
        'name',
        'link',
    ];

    public function courseTags()
    {
        $this->hasMany('App\Models\CourseTag', 'tag_id');
    }
}
