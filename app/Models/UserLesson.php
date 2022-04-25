<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class UserLesson extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'lesson_id',
        'progress'
    ];

    public static function getUserLesson($userId, $lessonId)
    {
        return UserLesson::where('user_id', $userId)->where('lesson_id', $lessonId)->first();
    }

    public function caculateProgress()
    {
        $documentsGet = Auth::user()->documents;
        $documents = Lesson::find($this['lesson_id'])->documents;
        $count = 0;
        foreach ($documents as $document) {
            foreach ($documentsGet as $documentGet) {
                if ($documentGet->id == $document->id) {
                    $count++;
                    break;
                }
            }
        }
        return $this->progress = ($count) * Config::get('lesson.max_progress_lesson') / count($documents);
    }
}
