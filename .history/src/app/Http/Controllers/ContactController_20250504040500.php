<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;
use app/Http/Requests/IndexContactsRequest.php

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

        $genderMap = [
        '1' => '男性',
        '2' => '女性',
        '3' => 'その他',
    ];
    $genderId = $request->input('gender');
    $data['gender_text'] = $genderMap[$genderId] ?? '未選択';

        $categoryMap = [
        '1' => '商品のお届けについて',
        '2' => '商品の交換について',
        '3' => '商品トラブル',
        '4' => 'ショップへのお問合せ',
        '5' => 'その他',
    ];
        $categoryId = $request->input('category_id');
        $data['category_name'] = $categoryMap[$categoryId] ?? '未設定';

        return view('confirm',compact('data'));
    }
    public function thanks(){
        return view('thanks');
    }
}
