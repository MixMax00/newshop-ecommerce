<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Product;

class NewShopController extends Controller
{
    function newShop(){

        $products = Product::Where('publication_status', 1)
                                  ->latest()
                                  ->take(8)
                                  ->get();


        return view('front-end.home.home',[
          'products'=>$products,
        ]);
    }
    function categoryProduct($id){
      $category_product = Product::where('category_name',$id)->where('publication_status', 1)->get();
        return view('front-end.category.category-content',[
          'category_products' => $category_product,
        ]);
    }

    public function productdetails($id)
    {
      $single_products = Product::find($id);
      return view('front-end.product.product-details',[
        'single_products' =>$single_products,
      ]);
    }
    function maleContent(){
        return view('front-end.category.maleus-content');
    }

}
