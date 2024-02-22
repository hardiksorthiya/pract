<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductAttributesValue extends Model
{
    use HasFactory;
    protected $table='attributes_value';
    protected $fillable = [
        
        'name',
        'slug',
        'description',
    ];
}
