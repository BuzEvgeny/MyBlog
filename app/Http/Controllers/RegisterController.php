<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;




class RegisterController extends Controller
{
    public function save(Request $request){
        if (Auth::check()){
            return redirect(route('user.show_all'));
        }
        $validateFields = $request->validate([
            'email' =>'required|email',
            'password' =>'required|min:3|max:10',
            'password_confirmation'=> 'required|min:3|max:10|same:password'
        ]);
        if (User::where('email', $validateFields['email'])-> exists()){
            return redirect(route('user.registration'))->withErrors([
                'email'=>'Такой пользователь уже зарегистрирован'
            ]);
        }

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('user.show_all'));
        }
        return redirect(route('user.show_all'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);

    }

}
