<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //category list
    public function categoryList(){
        $categories = Category::orderBy('id','desc')->get();
        return view('admin.category.category_list',compact('categories'));
    }//end method

    //category create
    public function categoryCreate(){
        return view('admin.category.category_create');
    }//end method

    //category store
    public function categoryStore(Request $request){
        $request->validate([
            'category_name'=>'required|unique:categories'
        ],[
            'category_name.required'=>'Category name is required.',
            'category_name.unique'=>'The category name is already exists.',
        ]);

       $category = new Category();
       $category->category_name = $request->category_name;
       $category->save();

       return redirect()->back()->with('message','Category Created Successfully.');
    }//end method

    //category edit
    public function categoryEdit($id){
        $category = Category::find($id);
        return view('admin.category.category_edit',compact('category'));
    }//end method

    //category update
    public function categoryUpdate(Request $request){
        $request->validate([
            'category_name'=>'required|unique:categories,category_name,'.$request->id,
        ],[
            'category_name.required'=>'Category name is required.',
            'category_name.unique'=>'The category name is already exists.',
        ]);

        Category::find($request->id)->update([
            'category_name' => $request->category_name,
        ]);

        return redirect()->route('admin.cateogory.list')->with('message','Category Updated Successfully.');
    }//end method

    //category delete
    public function categoryDelete($id){
        $category = Category::find($id)->delete();
        return redirect()->back()->with('message','Category Deleted Successfully.');
    }//end method






}//end class
