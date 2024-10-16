<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class ProductController extends Controller
{
    //use App\Models\Product;
 function index(){
    
    $products = Product::all();
    $copyright = "llll";
    return view ('products', compact('products', 'copyright'));
 }



public function show($id)
{
    $product = Product::findOrFail($id);
    return view('productshow', compact('product'));
}

}


