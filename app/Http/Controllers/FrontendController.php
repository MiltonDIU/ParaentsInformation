<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        return view('theme.home');
    }

    public function aToZ(){
        return view('theme.a-to-z');
    }


}
