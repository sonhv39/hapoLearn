<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LiveTeachingController extends Controller
{
    public function index()
    {
        return view('liveTeachings.index');
    }
}
