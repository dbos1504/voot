<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Page;
use App\Product;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $pages = Page::where('status', 1)->get();
        $categories = Categories::where('status', 1)->get();
        $products = Product::inRandomOrder()->take(6)->get();

        return view('layouts.index', compact('categories', 'pages', 'products'));
    }
}
