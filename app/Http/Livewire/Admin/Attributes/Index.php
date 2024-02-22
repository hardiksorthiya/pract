<?php

namespace App\Http\Livewire\Admin\Attributes;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ProductAttributes;

class Index extends Component
{
       use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $attributes_id;

    public function render()
    {
        $attributes = ProductAttributes::orderBy('id','ASC')->paginate(10);
        return view('livewire.admin.attributes.index', ['attributes' => $attributes]);
    }
}
