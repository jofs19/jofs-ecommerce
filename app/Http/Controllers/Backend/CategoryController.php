<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;


class CategoryController extends Controller
{
    public function CategoryView()
    {
        $category = Category::latest()->get();

        return view('backend.category.category_view', compact('category'));
    }


    public function CategoryStore(Request $request){

        $request->validate([
            'category_name_en' => 'required',
            'category_name_fil' => 'required',
            'category_icon' => 'required',

        ],[
            'category_name_en.required' => 'Input English Category Name',
            'category_name_fil.required' => 'Input Filipino Category Name',
        ]); //end validate

        Category::insert([
            'category_name_en' => $request->category_name_en,
            'category_name_fil' => $request->category_name_fil,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_fil' => str_replace(' ', '-', $request->category_name_fil),
            'category_icon' => $request->category_icon,

        ]);

        $notification = array(
            'message' => 'Category Added Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);


    }//end method

    public function CategoryEdit($id){
        $category = Category::findOrFail($id);

        return view('backend.category.category_edit', compact('category'));
    }
    

    public function CategoryUpdate(Request $request){
        $cat_id = $request->id;

        Category::findOrFail($cat_id)->update([
            'category_name_en' => $request->category_name_en,
            'category_name_fil' => $request->category_name_fil,
            'category_slug_en' => strtolower(str_replace(' ', '-', $request->category_name_en)),
            'category_slug_fil' => str_replace(' ', '-', $request->category_name_fil),
            'category_icon' => $request->category_icon,

        ]);

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.category')->with($notification);
    }//end 
    

    public function CategoryDelete($id){
        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    
    }//end method
    
}
