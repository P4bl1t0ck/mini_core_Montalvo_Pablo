<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Core</title>

    <!--//Bueno jeje mas tarde-->
</head>
<body>
    <div>Productos</div>
    <br>
    <a href="/envios"> Envios del Mini Core</a>
    
    {{ $slot }}
</body>
</html>