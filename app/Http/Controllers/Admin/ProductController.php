<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\File;
use App\Http\Requests\CategoryFormRequest;

class ProductController extends Controller
{
   public function index()
   {
    return view('backend.admin.product.index');
   }
   public function create(){

      $category = ProductCategory::all();
      return view('backend.admin.product.create', compact('category'));
   }
}
