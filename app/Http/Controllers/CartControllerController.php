<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartControllerController extends Controller
{
      public function add_to_cart(Request $request)
    {
    	$qty=$request->qty;
    	$product_id=$request->product_id;
        $product_info=DB::table('tbl_products')
                      ->where('product_id',$product_id)
                      ->first();
        $data['qty']=$qty;
        $data['id']=$product_info->product_id;
        $data['name']=$product_info->product_name;
        $data['price']=$product_info->product_price;
        $data['options']['image']=$product_info->product_image;
        Cart::add($data);
        return Redirect::to('/show-cart');
                     
    }

}
