<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Product;
use App\Subcategories;
use Illuminate\Http\Request;

class SubcategoriesController extends Controller
{
    public function index(Categories $cat)
    {
        $categories = Categories::with('category')->get();
        $sub = Subcategories::with('products')->where(['categories_id' => $cat->id, 'status' => 1])->get();

        return view('layouts.subcategories', compact('sub', 'categories', 'cat'));
    }

    public function show(Subcategories $page)
    {
        if (request()->has('number')) {
            dd(request('number'));
        }
        $categories = Categories::with('category')->get();
        $products = $page->products()->paginate(20);
        return view('layouts.subcategories-products', compact('products', 'categories', 'page'));

    }
}
