<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Products</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        .product-card { border: 1px solid #ccc; padding: 15px; margin-bottom: 10px; border-radius: 5px; }
        .title { font-size: 1.2em; font-weight: bold; color: #333; }
        .details { color: #666; }
    </style>
</head>
<body>

    <h1>My Anime Collection</h1>

    <div>
        @foreach($products as $product)
            <div class="product-card">
                <div class="title">{{ $product['title'] }}</div>
                <div class="details">Genre: {{ $product['genre'] }} | Episodes: {{ $product['episodes'] }}</div>
            </div>
        @endforeach
    </div>

</body>
</html>