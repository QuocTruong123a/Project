<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $titles ='Báo cáo >';
        $title ='Lập báo cáo';
        return view('Admin.report.list',compact('titles','title' ));
    }
}
