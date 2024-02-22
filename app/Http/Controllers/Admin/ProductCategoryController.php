<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryFormRequest;


class ProductCategoryController extends Controller
{
   public function index(){
    return view('backend.admin.product.category.category');
   }
// create and store product category

   public function create(){
      return view('backend.admin.product.category.create');
   }
   public function store(CategoryFormRequest $request){
   
      $validatedData = $request->validated();
      $category = new ProductCategory;
      $category->name = $validatedData['name'];
      $category->slug = Str::slug($validatedData['slug']);
      $category->description = $validatedData['description'];
      $category->meta_title = $validatedData['meta_title'];
      $category->meta_keyword = $validatedData['meta_keyword'];
      $category->meta_description = $validatedData['meta_description'];
      if($request->hasFile('image')){
         $file = $request->file('image');
         $ext = $file->getClientOriginalExtension();
         $filename = time().'.'.$ext;
         $file->move('uploads/category/',$filename);
         $category->image = $filename;
      }
      $category->status = $request->status == true ? '1':'0';
      $category->save();
      return redirect('admin/category')->with('message','Category Added Successfully');
      }

// edit product category

      public function edit(ProductCategory $cat){
         return view('backend.admin.product.category.edit', compact('cat'));
      }

// update product category

      public function update(CategoryFormRequest $request, $category){

         $validatedData = $request->validated();
         $category = ProductCategory::findOrFail($category); 
         $category->name = $validatedData['name'];
         $category->slug = Str::slug($validatedData['slug']);
         $category->description = $validatedData['description'];
         $category->meta_title = $validatedData['meta_title'];
         $category->meta_keyword = $validatedData['meta_keyword'];
         $category->meta_description = $validatedData['meta_description'];
         if($request->hasFile('image')){
            $path = 'uploads/category/'.$category->image;
            if(File::exists($path)){
               File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('uploads/category/',$filename);
            $category->image = $filename;
         }
         $category->status = $request->status == true ? '1':'0';
         $category->Update();
         return redirect('admin/category')->with('message','Category Updated Successfully');
         }

         // delete
         public function delete(ProductCategory  $request,$cat){
            $category = ProductCategory::find($cat); 
            $category->delete();
            return redirect('admin/category')->with('message','Category Deleted Successfully');
         }


}  