<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('Login.Login_in');
    }
    public function reset(){
        return view('Login.Reset');
    }
    public function pass(){
        return view('Login.Pass');
    }
}
