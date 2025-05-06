<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;

//お問合せ送信用
class ContactController extends Controller
{
    public function index(){
        return view('index');
    }
    public function confirm(Request $request){
        $request->all();
        $contacts = contact::all();
        return view('confirm');
    }
    public function thanks(){
        return view('thanks');
    }
}
