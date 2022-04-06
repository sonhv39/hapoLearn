<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $listcourses = Course::take(3)->get();
        $reviews = Review::take(4)->get();
        $numberlesson = Lesson::count();
        $numberuser = User::count();
        $numbercourse = Course::count();
        return view('index', compact('listcourses', 'reviews', 'numbercourse', 'numberlesson', 'numberuser'));
    }
}
