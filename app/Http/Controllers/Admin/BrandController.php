<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    //brand list
    public function brandList(){
        $brands = Brand::orderBy('id','desc')->get();
        return view('admin.brand.brand_list',compact('brands'));
    }//end method

    //brand create
    public function brandCreate(){
        return view('admin.brand.brand_create');
    }//end method

    //brand store
    public function brandStore(Request $request){
         //form validation
         $request->validate([
            'brand_name'=>'required|unique:brands',
            'brand_logo' =>'required|image'
        ],[
            'brand_name.required'=>'Brand name is required.',
            'brand_name.unique'=>'The brnad name is already exists.',
            'brand_logo.required'=>'Brand logo is required.'
        ]);

        //brand logo upload
         if($request->file('brand_logo')){
            $image = $request->file('brand_logo');
            $imageName = rand().'.'.$image->getClientOriginalName();
            Image::make($image)->resize(400,400)->save('upload/brand_logo/'.$imageName);
            $logo_path = 'upload/brand_logo/'.$imageName;
        }

        //data insert
        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_logo' => $logo_path,
        ]);

        return redirect()->back()->with('message','Brand Created Successfully.');
    }//end method

    //brand edit
    public function brandEdit($id){
        $brand = Brand::find($id);
        return view('admin.brand.brand_edit',compact('brand'));
    }//end method

    //brand update
    public function brandUpdate(Request $request){
        $brand = Brand::find($request->id);
        //form validation
         $request->validate([
            'brand_name'=>'required|unique:brands,brand_name,'.$request->id,
            'brand_logo' =>'image'
        ],[
            'brand_name.required'=>'Brand name is required.',
            'brand_name.unique'=>'The brnad name is already exists.',
        ]);

        //brand logo upload
        if($request->file('brand_logo')){
            if(File::exists($brand->brand_logo)){
                unlink($brand->brand_logo);
            }
            $image = $request->file('brand_logo');
            $imageName = rand().'.'.$image->getClientOriginalName();
            Image::make($image)->resize(400,400)->save('upload/brand_logo/'.$imageName);
            $logo_path = 'upload/brand_logo/'.$imageName;
            $brand->brand_logo =  $logo_path;
        }

        //data update
        $brand->brand_name = $request->brand_name;
        $brand->save();
        return redirect()->route('admin.brand.list')->with('message','Brand Updated Successfully.');
    }//end method

    //brand delete
    public function brandDelete($id){
        $brand = Brand::find($id);
        if(File::exists($brand->brand_logo)){
            unlink($brand->brand_logo);
        }

        $brand->delete();
        return redirect()->route('admin.brand.list')->with('message','Brand Deleted Successfully.');
    }//end method
}//end class
