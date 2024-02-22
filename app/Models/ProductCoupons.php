<?php

namespace App\Models;

use App\Models\ProductCoupons;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCoupons extends Model
{
    use HasFactory;
    protected $table = 'coupons';

    protected $fillable = [
        'name',
        'code',
        'value',
        'status',
        
    ];
}
