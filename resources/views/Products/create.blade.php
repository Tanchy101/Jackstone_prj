<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> create a product </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method="post" action="{{route('product.store')}}">
    @csrf
    @method('post')
        <div>
            <label>Name </lable>
            <input type ="text" name="name" placeholder="Name"/>
        </div>  
        <div>
            <label>Qty </lable>
            <input type ="text" name="qty" placeholder="Qty"/>
        </div> 
        <div>
            <label>Price </lable>
            <input type ="text" name="price" placeholder="Price"/>
        </div> 
        <div>
            <label>Description </lable>
            <input type ="text" name="description" placeholder="Description"/>
        </div> 
        
        <div> 
            <input type="submit" value= "Save a New Product"/>
        </div>

</form>
</body>

</html>