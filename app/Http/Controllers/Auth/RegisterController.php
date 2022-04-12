<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
    }

    public function register(RegisterRequest $request)
    {
        $input = $request->only('username', 'password', 'email');
        $user = User::create($input);
        if ($user) {
            Auth::login($user, true);
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
}
