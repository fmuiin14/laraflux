<h1>List Product</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)    
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td><a href="/products/{{$product->id}}/edit">Edit</a></td>
        </tr>
        @endforeach
    </tbody>

    <a href="/products/create">Tambah Data</a>
</table>