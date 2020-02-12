<?php

namespace App\Http\Controllers;
use App\Banner;
use Carbon\Carbon;
use Image;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function homePageView(){
        $banners = Banner::all();
        return view('backend.home',compact('banners'));
    }

    public function addBannerPage(){
        return view('backend.banner.add_banner');
    }
    public function addNewBanner(Request $obj){

        if ($obj->hasFile('image')){
            $get_image = $obj->file('image');
            $image_name = str::random(5) . '.' . $get_image->getClientOriginalExtension();
            Image::make($get_image)->resize(775, 430)->save('banner_images/' . $image_name, 100);

            Banner::insert([
                'banner_image'    => 'banner_images/' . $image_name,
                'banner_heading'  => $obj->banner_heading,
                'banner_title'    => $obj->banner_title,
                'banner_text'     => $obj->banner_text,
                'btn_name'   => $obj->btn_name,
                'btn_link'   => $obj->btn_link,
                'created_at' => Carbon::now()
            ]);

            Toastr::success('Banner Added Successfully :)', 'Success');
            return back();
        }
        else{
            Banner::insert([
                'title'      => $obj->title,
                'text'       => $obj->text,
                'btn_name'   => $obj->btn_name,
                'btn_link'   => $obj->btn_link,
                'created_at' => Carbon::now()
            ]);

            Toastr::success('Banner Added Successfully :)', 'Success');
            return back();
        }
    }

    public function editBannerPage($id){
        $banner_data = Banner::where('id',$id)->first();
        return view('backend.banner.edit_banner',compact('banner_data'));
    }

    public function editBanner(Request $request){
        if ($request->hasFile('image')){
            $image_data = Banner::findOrfail($request->id)->banner_image;

            if($image_data != null){
                unlink($image_data);
            }

            $get_image = $request->file('image');
            $image_name = str::random(5) . '.' . $get_image->getClientOriginalExtension();
            Image::make($get_image)->resize(775, 430)->save('banner_images/' . $image_name, 100);

            Banner::where('id',$request->id)->update([
                'banner_image'    => 'banner_images/' . $image_name,
                'banner_heading'  => $request->banner_heading,
                'banner_title'    => $request->banner_title,
                'banner_text'     => $request->banner_text,
                'btn_name'   => $request->btn_name,
                'btn_link'   => $request->btn_link,
                'updated_at' => Carbon::now()
            ]);

            Toastr::success('Banner Updated Successfully :)', 'Success');
            return back();
        }
        else{
            Banner::where('id',$request->id)->update([
                'banner_heading'  => $request->banner_heading,
                'banner_title'    => $request->banner_title,
                'banner_text'     => $request->banner_text,
                'btn_name'   => $request->btn_name,
                'btn_link'   => $request->btn_link,
                'updated_at' => Carbon::now()
            ]);

            Toastr::success('Banner Updated Successfully :)', 'Success');
            return back();
        }
    }

    public function deleteBanner($id){
        $image_data = Banner::findOrfail($id)->banner_image;

        if($image_data != null){
            unlink($image_data);
            Banner::findOrFail($id)->delete();
            Toastr::error('Banner Deleted Successfully', 'Success');
            return back();
        }
        else{
            Banner::findOrFail($id)->delete();
            Toastr::error('Banner Deleted Successfully', 'Success');
            return back();
        }
    }
}
