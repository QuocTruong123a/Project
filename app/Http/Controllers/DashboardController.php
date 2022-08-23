<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $titles ='';
        $title = "Dashboard";
        $time = Carbon::now()->month;
        $timeYear = Carbon::now()->year;
        $date = 'Tháng '. $time.'/'.$timeYear;
        return view('Admin.Dashboard.dashboard',compact('title','date','titles' ));
    }
}
