<?php

namespace App\Http\Controllers;

use App\Models\catagory;
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

    public function details(){
        $category_options = category::All();
        return view('admin',compact('category_options'));
    }

}
