<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountCotroller extends Controller
{
    public function index(){
        $titles ='Cài đặt hệ thống >';
        $title ='Quản lý tài khoản';
        return view('Admin.account.list',compact('titles','title'));
    }
}
