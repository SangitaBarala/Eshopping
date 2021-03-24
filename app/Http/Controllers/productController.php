<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\categories;
use App\Models\product;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;


class productController extends Controller
{
    //
    public function addProduct()
    {
        return view('admin');
    }

    public function imgupload(){

        $name = $_GET['product_name'];
        $description = $_GET['description'];
        $quantity = $_GET['in_stock'];
        $price = $_GET['price'];

        $product = new products();
        $product->product_name = $name;
        $product->category_id = '1';
        $product->product_description = $description;
        $product->product_in_stock = $quantity;
        $product->price = $price;
        $product->media_id = '1';
        $product->save();

        return view('admin');
    }
   public function allProducts(){
        return view('product')->with('products', products::all());
    }

    // zzCART
    public function cart(){
        return view('cart');
    }
    public function addToCart(products $product){
        $cart = session()->get('cart');
        if(!$cart){
            $cart =[
                $product->id => [
                    'name'=>$product->name,
                    'quantity'=>1,
                    'in_stock'=>$product->in_stock,
                    'price'=>$product->price
            ]
            ];
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success', "added to cart");
        }
        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success', "added to cart");
        }
        $cart[$product->id]=[
            'name'=>$product->name,
            'quantity'=>1,
            'in_stock'=>$product->in_stock,
            'price'=>$product->price
        ];
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', "added to cart");
    }
}
