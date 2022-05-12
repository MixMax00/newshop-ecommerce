<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use Cart;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
      $products = Product::find($request->product_id);

      Cart::add([
        'id' =>$request->product_id,
        'name' =>$products->product_name,
        'price' =>$products->product_price,
        'quantity' =>$request->qty,
        'attributes' =>[
          'image' =>$products->product_image,
        ],
      ]);

      return back();
    }



    public function showCart()
    {

      $items = Cart::getContent();
      // return $items;
      return View('front-end.cart.show-cart',[
        'cart_items' =>$items,
      ]);
    }
    public function deleteCart($rowId)
    {
      Cart::remove($rowId);
      return redirect('/show/cart');
    }
    public function updateCart(Request $request){
      Cart::update($request->id,[
        'quantity' =>[
          'relative' => false,
          'value' =>$request->quantity,
        ],
      ]);
        return redirect('/show/cart');
    }

}
