<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Product;
use App\Subcategories;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $back = '';
        $cat = '';
        $sub = Subcategories::where('id', $product->subcategories_id)->get();

        foreach($sub as $b) {
            $back = $b->location;
            $cat = $b->id;
        }
        $categories = Categories::with('category')->get();
        $related = Product::where('subcategories_id', $product->subcategories_id)->inRandomOrder()->take(4)->get();
        $subcategories = Subcategories::where('categories_id', $product->categories_id)->inRandomOrder()->take(4)->get();

        $previous = Product::where('id', '<', $product->id)->where('subcategories_id', $cat)->orderBy('id','desc')->first();
        $next = Product::where('id', '>', $product->id)->where('subcategories_id', $cat)->first();

        return view('layouts.product', compact('product', 'back', 'next', 'previous', 'categories', 'related', 'subcategories'));
    }
}
