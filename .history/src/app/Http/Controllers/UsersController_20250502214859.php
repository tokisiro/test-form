<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\Request;

//管理者用
class UsersController extends Controller
{
    public function register(){
        return view('register');
    }
    public function create(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            ]);
            $validated['password'] = bcrypt($validated['password']);
            User::create($validated);

            return redirect('/login')->with('success', '登録完了しました。ログインしてください。');
    }

    public function login(){
        return view('login');
    }
    public function admin(){
        $contact = contact::all();
        return view('admin',['contacts' => $contacts]);
    }
}
