<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('indexCategoria')}}" method="get">
        @csrf
        <button>Categoria</button>
    </form>
    <br>
    <form action="{{url('indexProducto')}}" method="get">
        @csrf
        <button>Producto</button>
    </form>
</body>
</html>