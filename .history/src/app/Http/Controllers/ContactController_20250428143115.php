<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;

//お問合せ送信用
class ContactController extends Controller
{
    public function index(){
        return view('index');
    }
    public function confirm(){
        $authors = Author
        return view('confirm');
    }
    public function thanks(){
        return view('thanks');
    }
}
