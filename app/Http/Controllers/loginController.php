<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate(
                    ['email'=> 'required|email',
                     'password'=> 'required|min:3'
                    ]);
        if(Auth::attempt($data))
        {
            $request->session()->regenerate();
            return redirect()->intended('/recettes');
        }
        return redirect()->intended('/login?error=problem_happend');
            
    }
}
