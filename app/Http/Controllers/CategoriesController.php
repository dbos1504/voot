<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Product;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::with('category')->get();
        $products = Product::inRandomOrder()->paginate(20);

        return view('layouts.categories', compact('categories', 'products'));
    }
}
