<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Product::create($request->all());
        return redirect('/products');
    }

    public function edit($id)
    {
        return view('products.edit');
    }
}
