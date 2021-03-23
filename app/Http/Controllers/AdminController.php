<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function dashboard(){

        $categories = categories::pluck('id', 'category_name');
        return view('admin.dashboard')->with(['categories' => $categories]);
    }

    public function addProduct(Request $request){

        $name = $_POST['product_name'];
        $description = $_POST['description'];
        $quantity = $_POST['in_stock'];
        $price = $_POST['price'];

        $product = new products();
            $product->product_name = $name;
            $product->category_id = '1';
            $product->product_description = $description;
            $product->product_in_stock = $quantity;
            $product->price = $price;
            $product->media_id = '1';
        $product->save();

        // TODO
        // 1. Validate if the file is sent from the form
        // 2. After storing the image store the name in the media table using proper relationships

        $file_name =  $request->file('productImage')->store($name);

        return redirect('/admin');
    }
}
