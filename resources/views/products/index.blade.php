<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product page</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        <!-- Message successfully-->
        <div>
            @if(session()->has('success'))
            <div>
                <!-- This success from return with 'success'-->
                {{session('success')}}
            </div>
            @endif
        </div>

        <div>
            <!-- Allow to go to create page-->
            <a href="{{route('product.create')}}">Create a product</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            <!-- $products here from 'products' controller-->
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->category}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->qty}}</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                         <!-- call route from route of edit page, this product from route {product} /product/{product}/edit-->
                        <a href="{{route('product.edit', ['product' => $product])}}">Edit</a>
                        <!-- Delete has to use form, call route from route of delete page, this product from route {product} /product/{product}/destroy-->
                        <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    
</body>
</html>