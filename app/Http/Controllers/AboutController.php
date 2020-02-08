<?php

namespace App\Http\Controllers;
use App\About;
use Carbon\Carbon;
use Image;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutPageView(){
        $about = About::where('id',1)->first();
        return view('backend.about',compact('about'));
    }
    public function addAboutDetails(Request $request){
        if ($request->hasFile('image')){

            $get_image = $request->file('image');
            $image_name = str::random(5) . '.' . $get_image->getClientOriginalExtension();
            Image::make($get_image)->save('about_images/' . $image_name, 100);

            About::where('id',1)->update([
                'reason'     => $request->reason,
                'experiance' => $request->experiance,
                'works'      => $request->works,
                'image'      => 'about_images/' . $image_name,
            ]);

            Toastr::success('About Updated Successfully', 'Success');
            return back();
        }
        else{
            About::where('id',1)->update([
                'reason'     => $request->reason,
                'experiance' => $request->experiance,
                'works'      => $request->works,
            ]);

            Toastr::success('About Updated Successfully', 'Success');
            return back();
        }
    }
}
