<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Product;

use Carbon\Carbon;

use Image;

class ProductController extends Controller
{

    public function index()
    {

      $products = Product::all();
      return view('Admin.product.mangeProduct', compact('products'));
    }
    public function create()
    {
      $categories = Category::where('publication_status', 1)->get();
      $brands = Brand::where('publication_status', 1)->get();

      return view('Admin.product.addProduct', [
        'categories' => $categories,
        'brands' => $brands,
      ]);
    }

    public function store(Request $request)
    {
      $request->validate([
        'category_name'      =>'required',
        'brand_name'         =>'required',
        'product_name'       =>'required|regex:/^[\pL\s\-]+$/u',
        'product_price'      =>'required',
        'product_quntity'    =>'required',
        'short_description'  =>'required',
        'long_description'   =>'required',
        'publication_status' =>'required',
      ]);



    $products = new Product();
        $products->category_name = $request->category_name;
        $products->brand_name = $request->brand_name;
        $products->product_name = $request->product_name;
        $products->product_price = $request->product_price;
        $products->product_quntity = $request->product_quntity;
        $products->short_description = $request->short_description;
        $products->long_description = $request->long_description;
        if($request->hasfile('product_image')){
          $prodect_image = $request->file('product_image');
          $image_extention = $prodect_image->getClientOriginalExtension();
          $directory = 'Product-image/';
          $image_path = time().'.'.$image_extention;
          // $prodect_image->move($directory,$image_path);
          Image::make($prodect_image)->resize(300,400)->save($directory.$image_path);

        }
        $products->product_image = $directory.$image_path;
        $products->publication_status = $request->publication_status;
        $products->created_at = Carbon::now();
        $products->save();


    // $category_value = $request->category_name;
    // return $category_value;



        return redirect()->back()->with('productDone','Product Save Successfuly !!');

    }
}
