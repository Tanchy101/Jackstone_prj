<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> edit a product </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method="post" action="{{ route('product.update', ['product' => $product]) }}">
    @csrf
    @method('put')
        <div>
            <label>Name </lable>
            <input type ="text" name="name" placeholder="Name" value="{{$product -> name}}"/>
        </div>  
        <div>
            <label>Qty </lable>
            <input type ="text" name="qty" placeholder="Qty" value="{{$product -> qty}}" />
        </div> 
        <div>
            <label>Price </lable>
            <input type ="text" name="price" placeholder="Price" value="{{$product -> price}}"/>
        </div> 
        <div>
            <label>Description </lable>
            <input type ="text" name="description" placeholder="Description" value="{{$product -> description}}" />
        </div> 
        
        <div> 
            <input type="submit" value= "Update Info"/>
        </div>

</form>
</body>

</html>