<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }


    public function category(){
        return view('frontend.shop');
    }

    public function loginUser(){
        return view('frontend.loginUser');
    }


    public function registerUser(){
        return view('frontend.registerUser');
    }
}
