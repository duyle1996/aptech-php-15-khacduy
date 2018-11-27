<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        // $categoris = Category::with('posts')->get();
        // return $categoris;

    }
    public function create()
    {
        $category = Category::get();
        return view('home', ['category' => $category]);
    }
}
