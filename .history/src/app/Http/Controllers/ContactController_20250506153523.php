<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ConfirmContactRequest;


//お問合せ送信用
class ContactController extends Controller
{
    public function index(Request $request){
        
        return view('index');
    }
    public function confirm(Request $request){
        $data = $request->all();
        return view('confirm',compact('data'));
    }
    public function create(Request $request){

        
        return view('thanks');
    }
}
