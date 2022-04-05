<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lc = Course::get();
        $courses = Course::take(3)->get();
        $coursesother = Course::take(3)->get();
        $reviews = Review::take(4)->get();
        $lessons = Lesson::get();
        $users = User::get();
        return view('home', compact('courses', 'coursesother', 'reviews', 'lessons', 'users', 'lc'));
    }
}
