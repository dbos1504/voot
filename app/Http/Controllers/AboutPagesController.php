<?php

namespace App\Http\Controllers;

use App\AboutPages;

class AboutPagesController extends Controller
{
    public function index()
    {
        $categories = AboutPages::all();

        return view('layouts.um-vorurnar-okkar', compact('categories'));
    }

    public function show(AboutPages $page)
    {
//       $product = Products::where('about_all_products_id', $page->id)->get();
        return view('layouts.category', compact('page'));
    }
}
