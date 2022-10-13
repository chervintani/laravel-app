<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        $error = null;
        $success = null;
        return view('products.index', compact('products', 'error', 'success'));
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string',
        //     'material' => 'required|string',
        //     'category' => 'required|in:EARRINGS,BRACELETS,NECKLACES',
        //     'price' => 'required|numeric',
        //     'inventory' => 'required|integer'
        // ]);

        try {
            Product::create($request->all());
        } catch (\Throwable $th) {
            $error = $th;
            return redirect()->route('products.index')->with('error', $error );
        }
        return redirect()->route('products.index')->with('success', 'User created successfully.');
    }
}
