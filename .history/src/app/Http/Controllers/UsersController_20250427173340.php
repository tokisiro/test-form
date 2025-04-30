<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function register(){
        return view('register');
    }
    public function login(){
        return view('ligin');
    }
}
