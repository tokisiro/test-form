<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
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
        $form = $request->all();
        User::create($form);
        return view('login');
    }
    public function login(){
        return view('login');
    }
    public function admin(){

        contact
        return view('admin');
    }
}
