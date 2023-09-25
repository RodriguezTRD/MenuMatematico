<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1 {
            color: #245;
            font-size: 45px;
        }

        .container {
            text-align: center;
        }                                               

        .menus {
            display: inline-block;
            margin: 60px;
            width: 180px;
            text-align: center;
        }

        .menus a {
            color: #245;
            text-decoration: none;
            display: block;
            font-size: 18px;
            margin-top: 20px;
        }

        .menus img {
            width: 180px;
            height: 180px;
            border: 4px solid #333;
        }

        body {
            background-color: #eee;
        }
    </style>
    <title>Menu</title>
</head>
<body>
    <div class="container">
        <h1>Hola, bienvenido!</h1>
        <div class="menus">
            <img src="img/operadores.jpg" alt="operadoresMatematicos">
            <a href="operadores.php">[OPERADORES]</a>
        </div>
        <div class="menus">
            <img src="img/figurasplanas.png" alt="figurasPlanas">
            <a href="figurasplanas.php">[FIGURAS PLANAS]</a>
        </div>
        <div class="menus">
            <img src="img/informacion.png" alt="informacion">
            <a href="informacion.php">[INFORMACION]</a>
        </div>
        <div class="menus">
            <img src="img/salida.webp" alt="salida">
            <a href="salida.php">[SALIR]</a>
        </div>
    </div>
</body>
</html>
