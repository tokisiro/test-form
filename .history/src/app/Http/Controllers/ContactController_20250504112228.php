<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\IndexContactRequest;


//お問合せ送信用
class ContactController extends Controller
{
    public function index(IndexContactRequest $request){
         $request->validated();
        return view('index');
    }
    public function confirm(){
        return view('confirm');
    }
    public function thanks(){
        return view('thanks');
    }
}
