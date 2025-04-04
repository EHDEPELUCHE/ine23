<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $htItem = []; // Diccionario
    public $iTotalItems = 0;
    public $dTotalPrice = 0;

    public function __Construct (Cart $cart = null) {
        if ($cart != null){
            $this->htItem = $cart->htItem;
            $this->iTotalItems = $cart->iTotalItems;
            $this->dTotalPrice = $cart->dTotalPrice;            
        }
    }

    public function add (Product $product) {
        if (array_key_exists($product->id, $this->htItem))
            $this->htItem[$product->id] = array('id' => $product->id,
                'name' => $product->name, 'price' => $product->price,
                'imgUrl' => $product->imgUrl, 
                'quantity' => $this->htItem[$product->id]['quantity'] + 1);
        else 
            $this->htItem[$product->id] = array('id' => $product->id,
                'name' => $product->name, 'price' => $product->price,
                'imgUrl' => $product->imgUrl, 
                'quantity' => 1);
        $this->iTotalItems++;
        $this->dTotalPrice += $product->price;
        return $this;
    }

    public function remove (Product $product) {
        if (array_key_exists($product->id, $this->htItem) && $this->htItem[$product->id]['quantity'] >0){            
            $this->htItem[$product->id] = array('id' => $product->id,
                'name' => $product->name, 'price' => $product->price,
                'imgUrl' => $product->imgUrl, 
                'quantity' => $this->htItem[$product->id]['quantity'] - 1);
            $this->iTotalItems--;
            $this->dTotalPrice -= $product->price;
        }
        return $this;
    }

    public function removeAll (Product $product) {
        if (array_key_exists($product->id, $this->htItem)){
            $this->iTotalItems -= $this->htItem[$product->id]['quantity'];
            $this->dTotalPrice -= $product->price * $this->htItem[$product->id]['quantity'];
            unset($this->htItem[$product->id]);
        }
        return $this;
    }
}
