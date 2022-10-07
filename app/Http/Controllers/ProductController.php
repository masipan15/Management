<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class ProductController extends Controller
{
    public function cart()
    {
        $products = Product::all();
        return view('cart', compact('products'));
    }

    public function tambahcart($id_product){
        $cart = session("cart");
    }

    public function insertcart(Request $request)
    {
        $product = Product::findorfail($request->input('id'));
        Cart::create(
            $product->id,
            $product->name,
            $request->input('quantity'),
            $product->price / 100,
        );
        return redirect()->route('/cart')->with('message', 'Successfully added');
    }
}
