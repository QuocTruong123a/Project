<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class deviceController extends Controller
{
    public function index(){
        $titles ='Thiêt bị > ';
        $title ='  Danh sách thiêt bị';

        return view('Admin.device.device',compact('title','titles' ));
    }
    public function create(){
        $titles ='Thiêt bị > ';
        $title ='Thêm thiêt bị';
        return view('Admin.device.device_add',compact('title','titles'));
    }
    public function device_detail(){
        $titles ='Thiêt bị > ';
        $title ='Chi tiết thiết bị';
        return view('Admin.device.device_detail',compact('title','titles'));
    }
}
