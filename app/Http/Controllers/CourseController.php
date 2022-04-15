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
        $courses = Course::filter($request->all())->paginate(Config::get('course.items_per_page'));
        $teachers = User::role()->get();
        $tags = Tag::all();
        return view('course', compact('courses', 'request', 'teachers', 'tags'));
    }
}
