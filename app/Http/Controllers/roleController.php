<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roleController extends Controller
{
    public function index(){
        $titles ='Cài đặt hệ thống >';
        $title ='Quản lý vai trò';
        return view('Admin.role.list',compact('titles','title'));
    }
}
