<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCotroller extends Controller
{
    public function index(){
        $titles ='Cài đặt hệ thống >';
        $title ='Quản lý vai trò';
        return view('Admin.user.list',compact('titles','title'));
    }
}
