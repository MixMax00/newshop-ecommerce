<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable =[
      'category_name',
      'brand_name',
      'product_name',
      'product_price',
      'product_quntity',
      'short_description',
      'long_description',
      'product_image',
      'publication_status'
    ];

    public function modelTocategory(){
       return $this->belongsTo(Category::class, 'category_name', 'id');
    }
    public function modelTobrand(){
       return $this->belongsTo(Brand::class, 'brand_name', 'id');
    }
}
