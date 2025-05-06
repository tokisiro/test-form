<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;

//管理者用
class UsersController extends Controller
{
    public function register(){
        return view('');
    }
    public function create(Request $request){
        $form = $request->all();
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
