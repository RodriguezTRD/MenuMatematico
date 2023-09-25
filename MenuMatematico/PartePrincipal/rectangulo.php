<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        text-align: center;
        background-color: #f2f2f2;
    }

    form {
        margin: 0 auto;
        padding: 15px;
    }

    label {
        display: block;
        margin: 12px;
    }

    .inputA {
        margin-top: 12px;
    }

    h1 {
        margin-top: 35px;
        color: #333;
        font-size: 45px;
    }

    a {
        text-decoration: none;
        color: #415;
        font-size: 18px;
        margin-top: 35px;
    }

    </style>
    <title>Rectángulo (Área y Perímetro)</title>
</head>
<body>
    <div class="container">
    <h1>Bienvenido a Rectángulo (Área y Perímetro)</h1>
    <form action="rectangulo.php" method="get">
        Ingrese la Base: 
        <input type="number" name="base" placeholder="Ingrese Base" required>
        <br><br>
        Ingrese la Altura: 
        <input type="number" name="altura" placeholder="Ingrese Altura" required>
        <br><br>
        <input type="submit" value="Calcular Rectángulo">
    </form>

    <?php
    if (isset($_GET["base"])&&isset($_GET["altura"])){
        $base = $_GET["base"];
        $altura = $_GET["altura"];

        $areadelRectangulo = $base * $altura;
        $perimetrodelRectangulo = ($base + $altura) * 2;

        echo "<br><br>";
        echo "*** Datos Ingresados del Rectángulo ***<br>";
        echo "La Base es: ".$base."<br>";
        echo "La Altura es: ".$altura."<br>";
        echo "<br><br>";
        echo "*** Resultado del Rectángulo ***<br>";
        echo "El Área es: ".$areadelRectangulo."<br>";
        echo "El Perímetro es: ".$perimetrodelRectangulo;
        echo "<br><br>";
    }
    ?>
    </div>
    <br><br>
    <a href="menu.php">[REGRESAR]</a>
</body>
</html>