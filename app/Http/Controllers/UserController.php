<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
      $validatedCredentials = $request->validate([
        "name"=>"min:6|max:16|required|unique:users",
        "password"=>"min:6|max:16|required",
        "email"=>"email|required|unique:users"
      ]);
      //hashing user password before saving to the database
      $validatedCredentials['password']=bcrypt($validatedCredentials['password']);
      //creating a new user
      $user = User::create($validatedCredentials);
      auth()->login($user);
      return redirect('/');
    }

    public function login(Request $request){
      $validatedCredentials = $request->validate([
        "loginname"=>"min:6|max:16|required",
        "loginpassword"=>"min:6|max:16|required",
      ]);
      if(auth()->attempt(['name'=>$validatedCredentials['loginname'],'password'=>$validatedCredentials['loginpassword']])){
        $request->session()->regenerate();
      }
      return redirect('/');
    }
    public function logout(Request $request){
      auth()->logout();
      return redirect('/');
    }
}
