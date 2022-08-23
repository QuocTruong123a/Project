<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personalController extends Controller
{
    public function index(){
        $titles =' ';
        $title = "Thông tin cá nhân";
        return view('Admin.personal.personal',compact('title','titles'));
    }
}
