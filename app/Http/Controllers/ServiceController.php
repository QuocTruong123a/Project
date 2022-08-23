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
}
