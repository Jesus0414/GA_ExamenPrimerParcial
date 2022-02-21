<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Funcion</title>
</head>
<body>
    <h1>Crear Funcion</h1>
    <a href="{{route('funciones.index')}}"> Regresar a la lista </a>
    <form method="post" action="{{route('funciones.store')}}">
        @csrf
        <label>Pelicula</label>
        <input type ="text" name="pelicula">
        <br>
        <label>Fecha</label>
        <textarea type ="text" name="fecha" rows="6"></textarea>
        <br>
        <label>Hora</label>
        <input type ="text" name="hora">
        <button type="submit">Guardar</button>
    </form>
</body>
</html>