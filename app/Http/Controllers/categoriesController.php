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
        $category = categories::pluck('id', 'category_name');

        return view("admin", compact('category'));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $products = products::where('category_id', $request->prod)->get();
            if ($products) {
                foreach ($products as $key => $product) {
                    $output .= '<tr>' .
                        '<td>' . $product->product_name . '</td>' .
                        '<td>' . $product->product_description . '</td>' .
                        '<td>' . $product->product_in_stock . '</td>' .
                        '<td>' . $product->price . '</td>' .
                        '</tr>';
                }
                return Response($output);
            }
        }

    }
}
