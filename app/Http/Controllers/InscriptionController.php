<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function inscription(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3'
        ]);
        
        User::create([
            'name'=>$request->fullname,
            'email'=>$request->email,
            'password'=>$request->password]);

        return redirect('/login');

    }
}
