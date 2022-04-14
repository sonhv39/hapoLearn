<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CourseController extends Controller
{
    public function index(Request $request)
    {
		dd($request->all());
        $courses = Course::filter($request)->paginate(12);
        $teachers = User::all()->where('role', Config::get('course.role.teacher'));
        $tags = Tag::all();
        $data = $request;

        return view('course', compact('courses', 'data', 'teachers', 'tags'));
    }
}
