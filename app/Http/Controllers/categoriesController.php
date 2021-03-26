<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoriesController extends Controller
{
    //
    public function details()
    {
        $category = categories::all();

        return view("admin", compact('category'));
    }


}
