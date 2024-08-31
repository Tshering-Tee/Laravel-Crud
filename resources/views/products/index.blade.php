<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            margin: 0;
        }

        h1 {
            color: #00aaff;
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            color: #00aaff;
            text-decoration: none;
            background-color: #1e1e1e;
            padding: 8px 16px;
            border-radius: 4px;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }

        a:hover {
            background-color: #0088cc;
        }

        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
        }

        th {
            background-color: #1e1e1e;
            color: #ffffff;
        }

        td {
            background-color: #2e2e2e;
            color: #cccccc;
        }

        tr:nth-child(even) {
            background-color: #252525;
        }

        tr:hover {
            background-color: #383838;
        }

        input[type="submit"] {
            background-color: #ff4d4d;
            color: #ffffff;
            border: none;
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #ff1a1a;
        }
    </style>
</head>
<body>

<h1>List of Products</h1>

<a href="{{route('products.create')}}">Create Product</a>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->qty}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td>
                <a href="{{route('products.edit', ['product' => $product])}}">Edit</a>
            </td>
            <td>
                <form method="post" action="{{route('products.destroy', ['product' => $product])}}">
                    @csrf
                    @method('delete')
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
