<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    // use HasFactory;
    // use SoftDeletes;
    public $timestamps = false; 
    protected $fillable = [
        'name_product', 'image','image2',  'image3', 'price', 'discount', 'description', 'description2', 'id_category'
    ];

    protected $table = "tbl_product";
}
