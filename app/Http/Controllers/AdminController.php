<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\media;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //

    public function dashboard(){

        $categories = categories::pluck('id', 'category_name');

        $products = products::orderBy('created_at', 'desc')->get();

        return view('admin.dashboard')->with(['categories' => $categories, 'products' => $products]);
    }


    public function productDelete($id){

        $product = products::findOrFail($id);
        $product->delete();
        return redirect('/admin');

    }


    public function addProduct(Request $request){

        $name = $_POST['product_name'];
        $description = $_POST['description'];
        $quantity = $_POST['in_stock'];
        $price = $_POST['price'];


        $product = new products();
            $product->product_name = $name;
            $product->category_id = $request->category;
            $product->product_description = $description;
            $product->product_in_stock = $quantity;
            $product->price = $price;
        $product->save();





        $paths = array();

        foreach ($request->productImages as $images){

            $name = time().'.'.$images->getClientOriginalExtension();

            $paths[] = array(
                'path' => $images->storeAs('productImages', $name),
            );
        }

        $product->media()->createMany($paths);
        return redirect('/admin');
    }
}
