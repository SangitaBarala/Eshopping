<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class mainPageController extends Controller
{
    //
    public function dispalyCard()
    {
        $card = products::where('category_id', '1')->get();
        return $card;
    }
}
