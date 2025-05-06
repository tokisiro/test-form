<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;

//管理者用
class UsersController extends Controller
{
    public function register(){
        return view('register');
    }
    public function create(RegisterUserRequest $request){
        $request->validate([  
        'name' => 'required|string|max:255',  
        'email' => 'required|email|unique:users,email',  
        'password' => 'required|string|min:8',
    ]);
        $validated['password'] = bcrypt($validated['password']);
        User::create($form);
        return redirect('/login');
    }
    public function login(){
        return view('login');
    }
    public function admin(){
        return view('admin');
    }
}
