<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function show($category, $product_alias)
    {
        $item = Product::where('alias', $product_alias)->first();

        return view('product.show', [
            'item' => $item
        ]);
    }

    public function showCategory($cat_alias)
    {
        $cat = Category::where('alias', $cat_alias)->first();

        return view('categories.index', [
            'cat' => $cat
        ]);
    }
}
