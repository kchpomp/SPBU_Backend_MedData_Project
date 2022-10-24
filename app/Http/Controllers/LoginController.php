<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Basic controller class
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login(Request $request){

        if(Auth::check()){
            return redirect()->intended(route('user.home'));
        }

        // Create an array that extracts email and password from the fields
        $formFields = $request->only(['email', 'password']);

        if(Auth::attempt($formFields)){
            return redirect()->intended(route('user.home'));
        }

        return redirect(route('user.login'))->wihErrors([
            'email' => 'Не удалось авторизоваться'
        ]);
    }
}
