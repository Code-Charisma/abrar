<?php

namespace App\Http\Controllers;
use App\About;
use App\Banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $banners = Banner::all();
        return view('frontend.index',compact('banners'));
    }
    public function aboutPageView(){
        $about = About::where('id',1)->first();
        return view('frontend.about',compact('about'));
    }
}
