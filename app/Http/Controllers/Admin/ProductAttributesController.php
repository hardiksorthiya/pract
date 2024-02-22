<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ProductAttributes;
use App\Http\Controllers\Controller;
use App\Models\ProductAttributesValue;
use App\Http\Requests\ProductAttributesRequest;
use App\Http\Requests\ProductAttributesValueRequest;
use App\Http\Controllers\Admin\ProductAttributesController;

class ProductAttributesController extends Controller
{
    public function index(){
        return view('backend.admin.product.attributes.index');
    }

    public function create(){
        return view('backend.admin.product.attributes.create');
    }
    public function store(ProductAttributesRequest $request){
   
        $validatedData = $request->validated();
        $attributes = new ProductAttributes;
        $attributes->name = $validatedData['name'];
        $attributes->slug = Str::slug($validatedData['slug']);
        $attributes->save(); 
        return redirect('admin/attributes')->with('message','Attribute Added Successfully');
        }

        public function edit(ProductAttributes $attri){

            
            return view('backend.admin.product.attributes.edit',compact('attri'));
         }

         public function update(ProductAttributesRequest $request, $attributes){

            $validatedData = $request->validated();
            $attributes = ProductAttributes::findOrFail($attributes); 
            $attributes->name = $validatedData['name'];
            $attributes->slug = Str::slug($validatedData['slug']);
            $attributes->Update();
            return redirect('admin/attributes')->with('message','Attributes Updated Successfully');
            }

            

            public function add($attri){

                $attributes =  ProductAttributes::find($attri);
                return view('backend.admin.product.attributesvalue.create', ['attributes'=>$attributes,],compact('attributes'));
            }
            }
   




