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

        $contacts = Contact::all()->map(function($contact) {
        $contact->gender_text = match($contact->gender) {
        1 => '男性',
        2 => '女性',
        3 => 'その他',
        default => ''
    };
        $contact->category_name = match($contact->category_id) {
        1 => '商品のお届けについて',
      2 => '商品の交換について',
      3 => '商品トラブル',
      4 => 'ショップへのお問い合わせ',
      default => ''
    };
    return $contact;
  });
  return view('yourview', compact('contacts'));
        $contacts = Contact::all();
        return view('admin', ['contacts' => $contacts]);
    }
}
