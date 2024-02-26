<?php

namespace App\Http\Livewire\Admin\Attributesvalue;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\ProductAttributes;
use App\Models\ProductAttributesValue;


class Index extends Component
{
   use WithPagination;

        protected $paginationTheme = 'bootstrap';
    
        public $attributes_id;
    
        public function render()
        {
            $attributes = ProductAttributesValue::orderBy('id','ASC')->paginate(10);
            return view('livewire.admin.attributesvalue.index', ['attributes_id' => $attributes]);

           
        }
    }

