<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductController extends Controller
{
    public function cart()
    {
        $data = Product::all();
        return view('cart', compact('data'));
    }

    public function insertcart(Request $request)
    {
        $product = Product::findOrFail($request->input('Carts_id'));
        Cart::add(
            $product->id,
            $product->name,
            $request->input('quantity'),
            $product->price/100,
        );
        return redirect()->route('cart');
    }
}
