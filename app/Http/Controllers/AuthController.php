<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('Auth.login');
    }

    public function register(){
        return view('Auth.register');
    }

    public function check__login(Request $req){
        if(Auth::attempt($req->only('email','password'))){
            return redirect()->route('index');
        }
        return back()->with('message' , 'Email atau password tidak cocok');
    }

    public function store__users(Request $req){
        $users = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password)
        ]);

        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
