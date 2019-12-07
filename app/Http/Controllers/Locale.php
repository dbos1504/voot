<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Page;
use App\Product;
use App;

class Locale extends Controller
{
    public function index($lang)
    {
        $pages = Page::where('status', 1)->get();
        $categories = Categories::where('status', 1)->get();
        $products = Product::all();
        App::setlocale($lang);
        return view('layouts.index', compact('categories', 'pages', 'products'));
    }
}
