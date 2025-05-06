<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Http\Requests\ConfirmUserRequest;

//管理者用
class UsersController extends Controller
{
    public function register(){
        return view('register');
    }
    public function create(RegisterUserRequest $request){
        $form = $request->all(ConfirmUser);
        User::create($form);
        return view('login');
    }
    public function login(){
        return view('login');
    }
    public function admin(){
        return view('admin');
    }
}
