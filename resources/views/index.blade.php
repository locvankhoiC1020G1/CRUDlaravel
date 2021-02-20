<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button><a href="{{route('product.create')}}">Them san pham</a></button>

<table>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>des</th>
        <th>action</th>
    </tr>
    @foreach($sanpham as $product )
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->des}}</td>
            <td>
                <button><a href="">Sua</a></button>
                <button><a href="">Xoa</a></button>
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>
