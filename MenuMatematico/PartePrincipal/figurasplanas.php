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
            margin: 25px 60px;
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
        <h1>Bienvenido a las Figuras Planas!</h1>
        <div class="menus">
            <img src="img/triangulo.webp" alt="operadoresMatematicos">
            <a href="triangulo.php">[TRIÁNGULO]</a>
        </div>
        <div class="menus">
            <img src="img/cuadrado.jpg" alt="figurasPlanas">
            <a href="cuadrado.php">[CUADRADO]</a>
        </div>
        <div class="menus">
            <img src="img/rombo.webp" alt="informacion">
            <a href="rombo.php">[ROMBO]</a>
        </div>
        <div class="menus">
            <img src="img/trapecio.webp" alt="salida">
            <a href="trapecio.php">[TRAPECIO]</a>
        </div>
        <div class="menus">
            <img src="img/circulo.png" alt="salida">
            <a href="circulo.php">[CÍRCULO]</a>
        </div>
        <div class="menus">
            <img src="img/rectangulo.jpg" alt="salida">
            <a href="rectangulo.php">[RECTÁNGULO]</a>
        </div>
    </div>
</body>
</html>