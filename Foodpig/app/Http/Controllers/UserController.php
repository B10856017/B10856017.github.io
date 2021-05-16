<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function showLoginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        DB::connection('mysql');
        $userData = DB::select('SELECT * FROM `消費者` WHERE `帳號`=?', [$request->Account]);

        if(!isset($userData[0]->帳號)){

            return view('login', ['err'=>"使用者不存在"]);

        }else if(password_verify($request->PassWord, password_hash($userData[0]->密碼, PASSWORD_DEFAULT))){

            session(['Account' => $userData[0]->帳號]);
            return redirect('/');

        }else{

            return view('login', ['err'=>"密碼錯誤"]);

        }
    }

    public function logout()
    {
        session()->forget('Account');
        return redirect('/');
    }
}