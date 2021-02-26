<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function show($category, $product_id)
    {
        $item = Product::where('id', $product_id)->first();

        return view('product.show', [
            'item' => $item
        ]);
    }

    public function showCategory($alias)
    {
        # code...
    }
}
