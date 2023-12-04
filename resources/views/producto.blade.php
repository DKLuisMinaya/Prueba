<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        @csrf 
        <h2>::Productos</h2>
        <label for="">Nombre: </label><br><br>
        <input type="text" name="nombre"><br><br>

        <label for="">Fecha de vencimiento: </label><br><br>
        <input type="text" name="fecha"><br><br>

        <label for="">Precio: </label><br><br>
        <input type="text" name="precio"><br><br>

        <label for="">Stock: </label><br><br>
        <input type="text" name="stock"><br><br>

        <button type="submit">Agregar</button>
    </form>

    
</body>
</html>