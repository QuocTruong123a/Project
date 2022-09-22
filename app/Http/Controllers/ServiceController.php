<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $titles ='Dịch vụ > ';
        $title ='  Danh sách dịch vụ';
        return view('Admin.servic.list',compact('titles','title'));
    }
    public function create(){
        $titles ='Dịch vụ > ';
        $title =' Thêm dịch vụ';
        return view('Admin.servic.add',compact('titles','title'));
    }
    public function detail(){
        $titles ='Dịch vụ > ';
        $title =' Chi tiết';
        return view('Admin.servic.detail',compact('titles','title'));
    }
}
