<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пиздаы</title>
</head>
<body>
    @if($product)
        <h1>{{ $product->name }}</h1>
        <p>{{ $product->description }}</p>
        <p>Цена: {{ $product->price }}₽</p>

        <form action="{{ route('order.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <label for="quantity">Количество:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>
            <button type="submit">Заказать</button>
        </form>
    @else
        <p>Продукт не найден.</p>
    @endif
</body>
</html>
