<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    static function Welcome () {
        $aProduct_offering = Product::Offerings();
        $aProduct_new = Product::NewProducts();
        return view('welcome', compact('aProduct_offering', 'aProduct_new'));
    }

    static function show(Product $product){
        return view('product.show', compact('product'));
    }

   
    public function addToCart(Product $product, Request $request){
        $cart = new Cart($request->session()->get('cart'));
        $cart->add($product);
        $request->session()->put('cart', $cart);
        //dd($cart);
        return view('product.show', compact('product'));
    }
}
