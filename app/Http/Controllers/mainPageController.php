<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\products;
use App\Models\Ratings;
use App\Models\WishList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mainPageController extends Controller
{
    //
    public function displayCard()
    {
        $card = products::all();
        $categories = categories::all();
        return view('mainPage', compact('card', 'categories'));
    }

    public function addToWishList($id)
    {
        $user = Auth::user()->id;

        $wish_Item = new WishList();
            $wish_Item->product_id = $id;
            $wish_Item->user_id = $user;

        $wish_Item->save();

        return redirect('/mainPage');
    }

    public function productStar (Request $request, products $product) {
        $rating = new Ratings();
        $rating->user_id = Auth::id();
        $rating->rating = $request->input('star');
        $product->rating()->save($rating);
        return redirect()->back();
    }
}
