<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::check()){
            return redirect(route('user.private'));
        }
        $formFields = $request->only(['email','password']);
        $remember = $request->has('remember');

        if (Auth::attempt($formFields, $remember)){
            return redirect()->intended(route('user.private'));
        }
        return redirect(route('user.login'))->withErrors([
            'email'=>'Не удалось авторизоваться',
        ]);
    }
}
