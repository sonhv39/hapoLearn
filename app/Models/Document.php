<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use HasFactory;
    protected $table = "documents";
    use SoftDeletes;
    protected $fillable =[
        'lesson_id',
        'name',
        'link'
    ];

    public function lesson()
    {
        $this->belongsTo('App\Models\lesson', 'lesson_id');
    }
}
