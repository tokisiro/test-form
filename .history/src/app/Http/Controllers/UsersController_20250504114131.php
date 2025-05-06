<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;

//管理者用
class UsersController extends Controller
{
    public function register(Request $request){
        $form = $request->all();
        Use
        return view('login');
    }
    public function login(){
        return view('login');
    }
    public function admin(){
        return view('admin');
    }
}
