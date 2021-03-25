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

    public function allProducts(){
        return view('product')->with('products', products::all());
    }

}
