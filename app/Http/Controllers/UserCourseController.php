<?php

namespace App\Http\Controllers;

use App\Models\UserCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserCourseController extends Controller
{
    public function store(Request $request){
        UserCourse::create($request-> all());
        return redirect()->route('courses.show', $request['course_id']);
    }

    public function update(Request $request, $course_id)
    {
        if (Auth::user()->isLearning($course_id)) {
            Auth::user()->courses()->updateExistingPivot($course_id, ['status' => 0]);
            return redirect()->route('courses.show', $request['course_id']);
        } else {
            return redirect()->route('courses.show', $request['course_id']);
        }
        
    }
}
