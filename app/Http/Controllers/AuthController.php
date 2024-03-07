<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
        Auth::login($users);
        // event(new Registered($users));
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function email__notice(){
        return view("auth.verify-email");
    }
    public function email__verify(EmailVerificationRequest $request){
        $request->fulfill();
        return redirect()->route('index');
    }
    public function email__resend(Request $request){
        $request->user()->sendEmailVerificationNotification();
        return back()->with('success', 'Verification link sent!');
    }
}
