<?php

namespace App\Http\Livewire\Admin\ProductCategory;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ProductCategory;


class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $product_category_id;

    public function render()
    {
        $product_category = ProductCategory::orderBy('id','ASC')->paginate(10);
        return view('livewire.admin.product-category.index',['product_category' => $product_category]);
    }
}
