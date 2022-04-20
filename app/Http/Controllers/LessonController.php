<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class LessonController extends Controller
{
    public function show($id, $idTwo)
    {
        $courses = Course::take(Config::get('course.items_other_course'))->get();
        $course = Course::find($id);
        $teachers = User::teacher()->take(Config::get('user.teachers_learn_user'))->get();
        $lesson = Lesson::find($idTwo);
        $tags = $course->tags;
        return view('lessons.show', compact('courses', 'course', 'teachers', 'lesson', 'tags'));
    }
}
