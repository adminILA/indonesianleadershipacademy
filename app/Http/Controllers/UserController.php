<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Authenticatable;
use Auth;
class UserController extends Controller
{
    //

    public function login(Request $request){
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->back()->withErrors('Wrong Credentials');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }

    public function index(){
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        else
        return view('pages.login');
    }
}
