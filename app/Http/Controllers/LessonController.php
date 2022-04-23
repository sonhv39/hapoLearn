<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class LessonController extends Controller
{
    public function show($courseId, $lessonId)
    {
        $courses = Course::take(Config::get('course.items_other_course'))->get();
        $course = Course::find($courseId);
        $lesson = Lesson::find($lessonId);
        $documents = $lesson->documents;
        $tags = $course->tags;
        return view('lessons.show', compact('courses', 'course', 'lesson', 'tags', 'documents'));
    }
}
