<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Продукты</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            background-color: white;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 15px;
            width: 200px;
            text-align: center;
            transition: background-color 0.3s;
        }

        .card.out-of-stock {
            background-color: #d3d3d3; /* Серый цвет для отсутствующих товаров */
        }

        .card h5 {
            margin: 10px 0;
            font-size: 1.25rem;
        }

        .card p {
            margin: 5px 0;
            color: #555;
        }

        .card .price {
            font-weight: bold;
            color: #007bff;
        }

        .card .btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .card .btn:hover {
            background-color: #0056b3;
        }

        .card.out-of-stock .btn {
            background-color: #6c757d; /* Серый цвет для кнопки в карточке отсутствующего товара */
            pointer-events: none; /* Отключаем клики на кнопку */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Список продуктов</h1>
        @foreach($products as $product)
        <div class="card {{ $product['quantity'] == 0 ? 'out-of-stock' : '' }}">
            <h5>{{ $product->name }}</h5>
            <p class="price">{{ number_format($product['price'], 0, ',', ' ') }} ₽</p>
            <p>Количество: {{ $product['quantity'] }}</p>
            <a href="#" class="btn">Купить</a>
        </div>
        @endforeach
    </div>
</body>
</html>
