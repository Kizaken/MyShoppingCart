<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
use DB;
use App\CartItem;
use Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex()
    {
    	$products = Product::all();
    	return view('home', compact('products'));
    }


    public function addToCart(Request $request, $productID)
    {
        $user = Auth::user()->id;
        $cartID = Cart::where('customer_id',$user)->value('id');
        $price = Product::where('id',$productID)->value('price');
        $product_name = Product::where('id',$productID)->value('name');
        $quantity = 1;
        $amount = $price * $quantity;
        $imagePath = Product::where('id', $productID)->value('imagePath');
        $clicked = CartItem::where('product_id', $productID)->get();
        \Session::flash('flash_message','Successfully added item to');

        if($clicked!="[]"){
            CartItem::where('product_id', $productID)->increment('quantity');
            $quantity = CartItem::where('product_id', $productID)->value('quantity');
            $amount = $price * $quantity;
            CartItem::where('product_id', $productID)->update(['amount' => $amount]);


        }
        if($clicked =="[]"){

            DB::table('cart_items')->insert([
                'product_id'=> $productID,
                'product_name'=> $product_name,
                'quantity'=> $quantity,
                'cart_id'=> $cartID,
                'imagePath'=> $imagePath,
                'amount'=> $amount
            ]);
        }

        return redirect('/home');

    }
    public function showCart()
    {
        $cart_items = CartItem::all();
        return view('cart', compact('cart_items'));

    }
    public function checkout()
    {
        return view("/checkout");
    }
   

}
