<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //use App\Models\Product;

public function index()
{
    $products = Product::all();
    return view('products', compact('products'));
}
public function updateQuantity(Request $request, $id)
{
    $product = Product::findOrFail($id);
    $product->quantity = $request->input('quantity');
    $product->save();

    return response()->json($product);
}

}

