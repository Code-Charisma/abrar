<?php

namespace App\Http\Controllers;
use App\Category;
use Carbon\Carbon;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryPageView(){
        $categories = Category::all();
        return view('backend.category',compact('categories'));
    }
    public function addNewCategory(Request $request){
        if(Category::where('name',$request->category_name)->exists()){
            Toastr::error('Category Name Already exists', 'Failed');
            return back();
        }
        else{
            Category::insert([
                'name' => $request->category_name,
                'created_at' => Carbon::now()
            ]);

            Toastr::success('Successfully Added', 'Success');
            return back();
        }
    }
    public function getCategoryName($id){
        $product = Category::find($id);
        return response()->json($product);
    }
    public function editCategoryName(Request $request){
        Category::where('id',$request->product_id)->update([
            'name'  => $request->name,
            'updated_at' => Carbon::now()
        ]);
        return response()->json(['success'=>'Product saved successfully.']);
    }
    public function deleteCategory($id){
        Category::where('id',$id)->delete();
        Toastr::error('Category Deleted', 'Deleted');
        return back();
    }
}
