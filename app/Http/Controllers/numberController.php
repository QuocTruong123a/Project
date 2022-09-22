<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class numberController extends Controller
{
    public function index(){
        $titles ='Cấp số >';
        $title ='Dach sách cấp số';
        //hiển thị trang thái hoạt động cho table
        $test ='Ngưng hoạt động';
        return view('Admin.number.list',compact('titles','title','test'));
    }
    public function create(){
        $titles ='Cấp số >';
        $title ='Dach sách cấp số';
        // $number = ['k101','k102','k103','k104','k105','k106','k107','k108','k109','k110'];
        return view('Admin.number.add',compact('titles','title' ));
    }
    public function information(){
        $titles ='Cấp số >';
        $title ='Chi tiết ';
        return view('Admin.number.information',compact('titles','title' ));
    }
}
