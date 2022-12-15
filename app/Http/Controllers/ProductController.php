<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Jobs\DeleteAllJob;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        DeleteAllJob::dispatch();

        $products = Product::where('user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);
        return view('pages.products.index', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'material' => 'required|string',
            'category' => 'required|in:EARRINGS,BRACELETS,NECKLACES',
            'price' => 'required|numeric',
            'inventory' => 'required|integer',
        ]);
        $request->merge(['user_id' => Auth::user()->id]);

        try {
            Product::create($request->all());
        } catch (\Throwable$th) {
            $error = $th;
            return redirect()->route('products.index')->with('message', ['success' => null, 'error' => 'Something went wrong']);
        }
        return redirect()->route('products.index', ['page' => 1])->with('message', ['success' => 'Product added successfully.', 'error' => null]);
    }

    public function test()
    {
        dd('done');
    }
}
