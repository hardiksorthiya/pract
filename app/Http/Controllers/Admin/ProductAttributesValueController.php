<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductAttributes;
use App\Http\Controllers\Controller;
use App\Models\ProductAttributesValue;
use App\Http\Requests\ProductAttributesValueRequest;

class ProductAttributesValueController extends Controller
{

      
        public function create(){

            $attributes =  ProductAttributes:: all();
            return view('backend.admin.product.attributesvalue.create', ['attributes'=>$attributes,],compact('attributes'));
        }
        public function valuestore(ProductAttributesValueRequest $request){

            $validatedData = $request->validated();
            $attributes_value = new ProductAttributesValue;
            $attributes_value->name = $validatedData['name'];
            $attributes_value->attributes_id = $validatedData['attributes_id'];
            $attributes_value->description = $validatedData['description'];
            $attributes_value->slug = Str::slug($validatedData['slug']);
            $attributes_value->save(); 
            return redirect('admin/attributes')->with('message','Attribute Added Successfully');
            }
        
             
    
             
    }
    

