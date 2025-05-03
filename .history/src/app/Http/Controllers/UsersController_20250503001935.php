<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\contact;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ConfirmationRequest;

//管理者用
class UsersController extends Controller
{
    public function register(){
        return view('register');
    }
    public function create(confirmationRequest $request){
        $validated = $request->all();
            $validated['password'] = bcrypt($validated['password']);
            User::create($validated);

            return redirect('/login')->with('success', '登録完了しました。ログインしてください。');
    }

    public function login(){
        return view('login');
    }
    public function admin(){
        $contact = contact::all();
        return view('admin',['contacts' => $contacts]);
    }
    
    public function store(ConfirmationRequest $request)
    {
        return $this->loginPipeline($request)->then(function ($request) {
            return app(LoginResponse::class);
        });
    }
    //ログアウト処理
    public function destroy(Request $request): LogoutResponse
    {
        $this->guard->logout();

        if ($request->hasSession()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return app(LogoutResponse::class);
    }
}
