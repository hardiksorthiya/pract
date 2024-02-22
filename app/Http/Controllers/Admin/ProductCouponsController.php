<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\ProductCoupons;
use App\Http\Controllers\Controller;
use App\Http\Requests\CouponsRequest;

class ProductCouponsController extends Controller
{
    public function index(){
      $coupons['coupons']=ProductCoupons::all();
        return view('backend.admin.product.coupons.index');
       }
    // create and store product coupons
    
       public function create(){
          return view('backend.admin.product.coupons.create');
       }
       public function store(CouponsRequest $request){
       
          $validatedData = $request->validated();
          $coupons = new ProductCoupons;
          $coupons->name = $validatedData['name'];
          $coupons->code = $validatedData['code'];
          $coupons->value = $validatedData['value'];
          $coupons->status = $request->status == true ? '1':'0';
          $coupons->save();
          return redirect('admin/coupons')->with('message','Coupon Added Successfully');
          }
    
    // edit product coupons
    
          public function edit(ProductCoupons $coupons){
             return view('backend.admin.product.coupons.edit', compact('coupons'));
          }
    
    // update product coupons
    
          public function update(CouponsRequest $request, $coupons){
    
             $validatedData = $request->validated();
             $coupons = ProductCoupons::findOrFail($coupons); 
             $coupons->name = $validatedData['name'];
          $coupons->code = $validatedData['code'];
          $coupons->value = $validatedData['value'];
          $coupons->status = $request->status == true ? '1':'0';
             $coupons->Update();
             return redirect('admin/coupons')->with('message','Coupon Updated Successfully');
             }
    
             // delete
             public function delete(ProductCoupons $request,$coupons){
               $coupons = ProductCoupons::find($coupons); 
               $coupons->delete();
                return redirect('admin/coupons')->with('message','Coupon Deleted Successfully');
             }
}
