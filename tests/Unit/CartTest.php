<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Cart;
use App\Models\Product;
//use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public static $cart;
    /**
     * A basic unit test example.
     */
    public function testConstructor(): void
    {
        $cart = new Cart;
        $this->assertEmpty($cart->htItem);
        $this->assertEquals(null, $cart->iTotalItems);
        $this->assertEquals(null, $cart->dTotalPrice);
    }

    public static function InitializeCart() {
        self::$cart = new Cart;
        self::$cart->add(Product::find(1));
        self::$cart->add(Product::find(2));
        self::$cart->add(Product::find(3));
        return self::$cart;
    }

    public function testAdd(): void {
        $cart = self::InitializeCart();
        $dTotalPrueba = (Product::find(1)->price * 2) +
        Product::find(2)->price + Product::find(3)->price;
        $cart->add(Product::find(1));
        $this->assertEquals(4, $cart->iTotalItems);
        $this->assertEquals(2, $cart->htItem[1]['quantity']);
        $this->assertEquals(1, $cart->htItem[2]['quantity']);
        $this->assertEquals(1, $cart->htItem[3]['quantity']);
        $this->assertEquals($dTotalPrueba, $cart->dTotalPrice);
    }

    public function testRemove(): void {
        $cart = self::InitializeCart();
        $dTotalPrueba = Product::find(2)->price + Product::find(3)->price;
        $cart->remove(Product::find(1));
        $this->assertEquals(2, $cart->iTotalItems);
        $this->assertEquals(0, $cart->htItem[1]['quantity']);
        $this->assertEquals(1, $cart->htItem[2]['quantity']);
        $this->assertEquals(1, $cart->htItem[3]['quantity']);
        $this->assertEquals($dTotalPrueba, $cart->dTotalPrice);
    }

    public function testRemoveAll(): void {
        $cart = self::InitializeCart();
        $dTotalPrueba = Product::find(2)->price + Product::find(3)->price;
        $cart->removeAll(Product::find(1));
        $this->assertEquals(2, $cart->iTotalItems);
        $this->assertEquals(false, array_key_exists(1, $cart->htItem));
        $this->assertEquals(1, $cart->htItem[2]['quantity']);
        $this->assertEquals(1, $cart->htItem[3]['quantity']);
        $this->assertEquals($dTotalPrueba, $cart->dTotalPrice);
    }
}
