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
        switch($contact->gender) {
        case 1:
            $contact->gender_text = '男性';
            break;
        case 2:
            $contact->gender_text = '女性';
            break;
        case 3:
            $contact->gender_text = 'その他';
            break;
        default:
            $contact->gender_text = '';
            break;
        }
        // お問い合わせ内容を変換
        switch($contact->category_id) {
        case 1:
            $contact->category_name = '商品のお届けについて';
            break;
        case 2:
            $contact->category_name = '商品の交換について';
            break;
        case 3:
            $contact->category_name = '商品トラブル';
            break;
        case 4:
            $contact->category_name = 'ショップへのお問い合わせ';
            break;
        case 5:
            $contact->category_name = 'その他';
            break;
        default:
            $contact->category_name = '';
            break;
    }

    return view('admin',compact($contact));

    };