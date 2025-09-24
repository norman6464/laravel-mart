<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Mart</title>
</head>
<body>
  <div>
    <h2> Show Product</h2>
  </div>
  <div>
    <a href="{{ route('products.index') }}"> Back</a>
  </div>
  
  <div>
    <strong>Name:</strong>
    {{ $product->name }}
  </div>
  
  <div>
    <strong>Description:</strong>
    {{ $product->description }}
  </div>
  
  <div>
    <strong>Price:</strong>
    {{ $product->price }}
  </div>
  
</body>
</html>