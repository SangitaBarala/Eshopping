<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mainPageController extends Controller
{
    //
    public function dispalyCard()
    {
        $card = products::all();
        return view('mainPage', compact('card'));
    }
}
