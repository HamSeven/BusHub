<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function report2(){
        return view('report2');
    }

    public function about(){
        return view('about');
    }
}
