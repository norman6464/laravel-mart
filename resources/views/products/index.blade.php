<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Mart</title>
</head>

<body>
  <a href="{{ route('products.create') }}">Create New Product</a>

  <table>
    <tr>
      <th>Name</th>
      <th>Description</th>
      <th>Price</th>
      <th>Category</th>
      <th>Action</th>
    </tr>
    @foreach ($products as $product)
      <tr>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->category_id }}</td>
        <td>
          <form action="{{ route('products.destroy', $product->id) }}" method="POST">
            <a href="{{ route('products.show', $product->id) }}">Show</a>
            <a href="{{ route('products.edit', $product->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <!-- $product->idを送ることによってコントローラーに適切なレコードの$product変数を送ることができる -->
            <!-- Laravelでは/products/:idにDELETEリクエストを送ることでデータを削除できる -->
            <button type="submit">Delete</button>
          </form>
        </td>
      </tr>
    @endforeach
  </table>
</body>

</html>