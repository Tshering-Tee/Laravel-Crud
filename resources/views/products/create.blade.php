<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            color: #00aaff;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #cccccc;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #444;
            border-radius: 4px;
            background-color: #2e2e2e;
            color: #ffffff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #00aaff;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0088cc;
        }

        ul {
            padding-left: 20px;
            margin-bottom: 20px;
            color: #ff6b6b;
        }

        li {
            list-style-type: none;
        }

    </style>
</head>
<body>

    <h1>Create Product</h1>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif

    <form method="post" action="{{ route('products.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter the product name" required>
        </div>

        <div>
            <label for="qty">Quantity:</label>
            <input type="number" id="qty" name="qty" placeholder="Enter quantity" required>
        </div>

        <div>
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" placeholder="Enter price" step="0.01" required>
        </div>

        <div>
            <label for="description">Description:</label>
            <input type="text" id="description" name="description" placeholder="Enter description">
        </div>

        <div>
            <input type="submit" value="Create Product">
        </div>
    </form>

</body>
</html>
