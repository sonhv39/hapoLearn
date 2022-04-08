<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function __construct()
    {
    }

    public function login(LoginRequest $request)
    {
        $input = $request->only('lusername', 'lpassword', 'remember_token');
        if (Auth::attempt([
          'username' => $input['lusername'],
          'password' => $input['lpassword']
        ], isset($input['remember_token']) ? true : false)) {
//            dd(Auth::user());
            return redirect()->route('home');
        } else {
            return redirect()->back()->withError('sai username hoặc password!!!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
