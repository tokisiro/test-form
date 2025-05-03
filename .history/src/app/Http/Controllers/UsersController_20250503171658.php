<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\LoginUserRequest;


//管理者用
class UsersController extends Controller
{
    public function register(){
        return view('register');
    }
    public function create(Request $request){
        $validated = $request->validated();
            User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
        ]);
            return redirect('/login');
    }

    public function login(){
        return view('login');
    }
    public function admin(){
        $contact = contact::all();
        return view('admin',['contacts' => $contacts]);
    }
    
}
