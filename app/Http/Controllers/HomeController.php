<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "สวัสดี";
    }

    public function greeting($name){
        return "สวัสดี $name";
    }

    public function cal($num1,$num2,$num3){
        return $num1+$num2+$num3;
    }
}
