<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;
    protected $table ='reviews';
    use SoftDeletes;
    protected $fillable =[
        'course_id',
        'user_id',
        'content',
        'star_rating'
    ];
    public function user(){
        $this -> belongsTo('App\Models\User','user_id');
    }
    public function course(){
        $this -> belongsTo('App\Models\Course','course_id');
    }
}
