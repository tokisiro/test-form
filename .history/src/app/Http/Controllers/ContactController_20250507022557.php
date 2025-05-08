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
    public function index(){
        
        return view('index');
    }
    public function confirm(ConfirmContactRequest $request){
        $data = $request->all();
        dd($data);
        Contact::create($data);
        return view('confirm',compact('data'));
    }
    public function create(Request $request){

        $data = $request->all();

        Contact::create($data);

        return redirect('/thanks');
    }
}
