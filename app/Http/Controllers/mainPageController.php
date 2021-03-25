<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mainPageController extends Controller
{
    //
    public function displayCard()
    {
        $card = products::all();
        $categories = categories::all();
        return view('mainPage', compact('card', 'categories'));
    }
}
