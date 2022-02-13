<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\SlidersController;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $sliders = Slider::where('page_name','Home')->where('is_active','1')->get();
        return view('theme.home',compact('sliders'));
    }

    public function aToZ(){
        return view('theme.a-to-z');
    }


}
