<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class CourseController extends Controller
{
    public function index(Request $data)
    {
        $courses = Course::filter($data->all())->paginate(12);
        $teachers = User::all()->where('role', Config::get('course.role.teacher'));
        $tags = Tag::all();
        return view('course', compact('courses', 'data', 'teachers', 'tags'));
    }
}
