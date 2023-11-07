<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit a product page</title>
</head>
<body>
    <h1>Update a product</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->any() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
    <!--method action with route from web.php-->
    <form method="post" action="{{route('product.update', ['product' => $product])}}">       
        @csrf
        @method('put')
        <div>
            <lable>Category</lable>
            <input type="text" name="category" placeholder="category" value="{{$product->category}}"/>
        </div>
        <div>
            <lable>Name</lable>
            <input type="text" name="name" placeholder="name" value="{{$product->name}}" />
        </div>
        <div>
            <lable>Qty</lable>
            <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}" />
        </div>
        <div>
            <lable>Price</lable>
            <input type="text" name="price" placeholder="price" value="{{$product->price}}"/>
        </div>
        <div>
            <lable>Description</lable>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}"/>
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>

    </form>
    
</body>
</html>