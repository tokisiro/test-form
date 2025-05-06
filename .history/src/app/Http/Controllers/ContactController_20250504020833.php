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
        $data = $request->all();
        
        $tel1 = $request->input('tel1');
        $tel2 = $request->input('tel2');
    $tel3 = $request->input('tel3');
    $data['tel'] = "{$tel1}-{$tel2}-{$tel3}";
        return view('confirm',compact('data'));
    }
    public function thanks(){
        return view('thanks');
    }
}
