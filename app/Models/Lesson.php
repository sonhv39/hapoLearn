<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;

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
        return $this->belongsToMany(User::class, 'user_lesson', 'lesson_id', 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function documents()
    {
        return $this->hasMany(Document::class, 'lesson_id');
    }

    public function caculateProgress()
    {
        $documents = $this->documents;
        $count = 0;
        foreach ($documents as $document) {
            if ($document->status == Config::get('document.learned_status')) {
                $count ++;
            }
        }

        return $this->progress = ($count) * Config::get('lesson.max_progress_lesson') / count($documents);
    }

    public function scopeFilter($query, $data)
    {
        if (isset($data['keyword']) && !is_null($data['keyword'])) {
            $query->where('name', 'LIKE', '%' . $data['keyword'] . '%');
        }

        return $query;
    }
}
