<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;


class OrderController extends Controller
{
    public function store(Request $request)
{
    // Валидация данных
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'quantity' => 'required|integer|min:1',
    ]);

    // Получение продукта
    $product = Product::findOrFail($request->product_id);
    $total = $product->price * $request->quantity;

    // Создание заказа
    Order::create([
        'product_id' => $product->id,
        'quantity' => $request->quantity,
        'total' => $total,
    ]);

    return redirect()->route('product.show', $product->id)->with('success', 'Заказ успешно создан!');
}

    
}
