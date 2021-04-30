<h1>Create Product</h1>

<form action="/products/{{$products->id}}" method="POST">
    @method('PUT')
    @csrf
    Name: <input type="text" value="{{$products->name}}" name="name"><br>
    Description: <input type="text" value="{{$products->description}}" name="description"><br>
    Price: <input type="number" value="{{$products->price}}" name="price"><br>
    Image URL: <input type="text" value="{{$products->image_url}}" name="image_url"><br>

    <input type="submit" value="save">
</form>