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
        $listcourses = Course::get();
        $reviews = Review::take(4)->get();
        $lessons = Lesson::get();
        $users = User::get();
        $numbercourse = count($listcourses);
        $numberlesson = count($lessons);
        $numberuser = count($users);
        return view('index', compact('listcourses', 'reviews', 'lessons', 'users', 'numbercourse', 'numberlesson', 'numberuser'));
    }
}
