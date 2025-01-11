<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function signup(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('auth.register');
    }

    public function register(request $req){
        $req->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'email' => 'required|email|unique:users,email',

        ]);

        $user = new User();

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $data = $user->save();

        if($data){
            $user->assignRole('user');
            return redirect()->route('login')->with('success','registered successfully');
        }
        else{
            return back()->with('error','Something went wrong');
        }
    }

    public function signin(){
        return view('auth.login');
    }

    public function login(request $req){
//            dd($req->all());
        $req->validate([
            'email' =>'required|email',
            'password' =>'required',
        ]);

        $auth = $req->only('email','password');
        if(Auth::attempt($auth)){
            return redirect()->route('welcome')->with('success','login successfully');
        }
        else{
            return back()->with('error','something went wrong');
        }
    }

    public function logout(){
        Session::flash('message' ,'you have been logged out successfully');
        Auth::logout();

        return redirect()->route('welcome');


    }
}
