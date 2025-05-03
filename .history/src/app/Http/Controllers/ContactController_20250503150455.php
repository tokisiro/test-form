<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\IndexContactRequest;

//お問合せ送信用
class ContactController extends Controller
{
    public function index(){
        return view('index');
    }
    public function confirm(ConfirmationRequest $request){
        $forms = $request->all();
        $tel1 = $request->input('tel1');
        $tel2 = $request->input('tel2');
        $tel3 = $request->input('tel3');
        $full_tel = $tel1 . '-' . $tel2 . '-' . $tel3;
        $forms['tel'] = $full_tel;

        $genderMap = [
            '1' => '男性',
            '2' => '女性',
            '3' => 'その他'
    ];

        $categoryMap = [
            '1' => '商品のお届けについて',
            '2' => '商品の交換について',
            '3' => '商品トラブル',
            '4' => 'ショップへのお問合せ',
            '5' => 'その他'
    ];

        $forms['gender_text'] = $genderMap[$forms['gender']] ?? '未選択';
        $forms['category_text'] = $categoryMap[$forms['category_id']] ?? '未選択';

        return view('confirm', compact('forms'));
    }
    public function create(Request $request){
        $data = $request->all();
        contact::create($data);
        return view('thanks');
    }
}
