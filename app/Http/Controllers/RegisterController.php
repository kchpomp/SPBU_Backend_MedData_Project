<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function save(Request $request){
        //If user exists then redirect it to the homepage directly
        if(Auth::check()){
            return redirect(route('user.home'));
        }
        // Validator
        $validateFields = $request->validate([
            // This validator checks a user's email and password
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(User::where('email', $validateFields['email'])->exists()){
            return redirect(route('user.registration'))->WithErrors([
                'email' => 'Такой пользователь уже существует'
            ]);
        }

        $user = User::create($validateFields);
        // If user exists then redirect to his homepage
        if($user){
            Auth::login($user);
            return redirect()->to(route('user.home'));
        }

        return redirect(route('user.login'))->WithErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}
