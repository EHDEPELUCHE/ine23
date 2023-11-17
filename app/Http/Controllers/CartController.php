<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    static function show(){
        $cart = session()->get('cart');
        return view('cart.show', compact('cart'));
    }

    public function operate(string $sOperation, Product $product, Request $request){
        $cart = session()->get('cart');
      
        switch($sOperation){
            case 'add':
                $cart = $cart->add($product);
                session()->put('cart', $cart);
                break;
            case 'remove':
                $cart = $cart->remove($product);
                session()->put('cart', $cart);
                break;
            case 'removeAll':
                $cart = $cart->removeAll($product);
                session()->put('cart', $cart);
                break;
        }
       
        return view('cart.show', compact('cart'));
    }
/*
    public function add(Product $product, Request $request){
        echo "entra aqui";
        $cart = session()->get('cart');
        $cart = $cart->add($product);
        session()->put('cart', $cart);
        return view('cart.show', compact('cart'));
    }

    public function remove(Product $product, Request $request){
        $cart = session()->get('cart');
        $cart = $cart->remove($product);
        session()->put('cart', $cart);
        return view('cart.show', compact('cart'));
    }

    public function removeAll(Product $product, Request $request){
        $cart = session()->get('cart');
        $cart = $cart->removeAll($product);
        session()->put('cart', $cart);
        return view('cart.show', compact('cart'));
    }
*/
}
