<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id, $idTwo)
    {
        $courses = Course::take(5)->get();
        $countCourse = 0;
        $course = Course::find($id);
        $teachers = User::teacher()->take(3)->get();
        $lesson = Lesson::find($idTwo);
        $tags = $course->tags;
        return view('lessons.show', compact('courses', 'course', 'teachers', 'lesson', 'tags', 'countCourse'));
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
