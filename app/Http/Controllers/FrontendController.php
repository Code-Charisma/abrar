<?php

namespace App\Http\Controllers;
use App\About;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function aboutPageView(){
        $about = About::where('id',1)->first();
        return view('frontend.about',compact('about'));
    }
}
