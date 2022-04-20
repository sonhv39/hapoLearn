<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class LessonController extends Controller
{
    public function show($idCourse, $idLesson)
    {
        $courses = Course::take(Config::get('course.items_other_course'))->get();
        $course = Course::find($idCourse);
        $lesson = Lesson::find($idLesson);
        $tags = $course->tags;
        return view('lessons.show', compact('courses', 'course' , 'lesson', 'tags'));
    }
}
