<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class productController extends Controller
{
    //
    public function addProduct()
    {

        return view('admin');
    }
    public function imgupload(Request $req){

        $val = Validator::make($req->all, [
            'image' => 'image|required',
        ]);

        if($val->fails()) {
            return redirect()->back()->with(['message' => 'No file received']);
        }
        else {
            $path = $req->file('image')->store('images');
            return redirect()->back();
        }


    }
}
