<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Config;
use PhpParser\Node\Expr\FuncCall;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'img_url',
        'price',
    ];

    public function getLearnerAttribute()
    {
        return Course::users()->where('role', 0)->count();
    }

    public function getLessonAttribute()
    {
        return $this->lessons->count();
    }

    public function getTimeAttribute()
    {
        return Course::lessons()->sum('time');
    }

    public function getTeacherAttribute()
    {
        return Course::users()->where('role', 1);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'course_id');
    }

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'course_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_courses', 'course_id', 'user_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'course_tags', 'course_id', 'tag_id');
    }

    public function scopeFilter($query, $data)
    {
        if (is_null($data['sort'])) {
            $query->orderBy('created_at', 'desc');
        } else {
            $query->orderBy('created_at', $data['sort']);
        }

        if (isset($data['input']) && !is_null($data['input'])) {
            $query->where('title', 'LIKE', '%'.$data['input'].'%');
        }

        if (isset($data['teacher']) && $data['teacher'] != 'null') {
            $query->whereHas('users', function ($subquery) use ($data) {
                $subquery->where('user_id', $data['teacher']);
            });
        }

        if (isset($data['amountstd']) && $data['amountstd'] != 'null') {
            $query->withCount([
                'users' => function ($subquery) {
                    $subquery->where('role', Config::get('course.role.user'));
                }
            ])->orderBy('users_count', $data['amountstd']);
        }

        if (isset($data['timelearn']) && $data['timelearn'] != 'null') {
            $query->withSum('lessons', 'time')->orderBy('lessons_sum_time', $data['timelearn']);
        }

        if (isset($data['amountls']) && $data['amountls'] != 'null') {
            $query->withCount('lessons')->orderBy('lessons_count', $data['amountls']);
        }

        if (isset($data['tag']) && !is_null($data['tag'])) {
            $query->whereHas('tags', function ($subquery) use ($data) {
                $subquery->whereIn('tag_id', $data['tag']);
            });
        }

        return $query;
    }
}
