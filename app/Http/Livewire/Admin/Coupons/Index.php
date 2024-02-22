<?php

namespace App\Http\Livewire\Admin\Coupons;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ProductCoupons;

class Index extends Component
{
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $coupons_id;

    public function render()
    {
        $coupons = ProductCoupons::orderBy('id','ASC')->paginate(10);
        return view('livewire.admin.coupons.index',['coupons' => $coupons]);
    }
}
