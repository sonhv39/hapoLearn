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
        $data = $request->all();
        $data += [
            'avata_url' => ''
        ];
        $user = User::create($data);
        if ($user) {
            Auth::login($user, true);
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
}
