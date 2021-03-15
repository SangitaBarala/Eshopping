<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    //
    public function addProduct()
    {

        return view('admin');
    }

    public function imgupload(){

        $name = $_GET('product_name');
        $description = $_GET('description');
        $quantity = $_GET('in_stock');
        $price = $_GET('price');

        $product = new products();
        $product->product_name = $name;
        $product->product_description = $description;
        $product->product_in_stock = $quantity;
        $product->price = $price;
        $product->save();

        return redirect('admin');
    }
}
