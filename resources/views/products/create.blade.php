<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a product page</title>
</head>
<body>
    <h1>Create a product</h1>
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
    <form method="post" action="{{route('product.store')}}">       
        @csrf
        @method('post')
        <div>
            <lable>Category</lable>
            <input type="text" name="category" placeholder="category" />
        </div>
        <div>
            <lable>Name</lable>
            <input type="text" name="name" placeholder="name" />
        </div>
        <div>
            <lable>Qty</lable>
            <input type="text" name="qty" placeholder="Qty" />
        </div>
        <div>
            <lable>Price</lable>
            <input type="text" name="price" placeholder="price" />
        </div>
        <div>
            <lable>Description</lable>
            <input type="text" name="description" placeholder="Description" />
        </div>
        <div>
            <input type="submit" value="Save" />
        </div>

    </form>
    
</body>
</html>