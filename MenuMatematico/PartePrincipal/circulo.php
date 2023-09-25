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
    <title>Círculo (Área y Perímetro)</title>
</head>
<body>
    <div class="container">
    <h1>Bienvenido a Círculo (Área y Perímetro)</h1>
    <form action="circulo.php" method="get">
        Ingrese el Radio: 
        <input type="number" name="radio" placeholder="Ingrese Radio" required>
        <br><br>
        <input type="submit" value="Calcular Círculo">
    </form>

    <?php
    if (isset($_GET["radio"])){
        $radio = $_GET["radio"];

        $areadelCirculo = M_PI * pow($radio,2);
        $perimetrodelCirculo = M_PI * $radio * 2;

        echo "<br><br>";
        echo "*** Datos Ingresados del Círculo ***<br>";
        echo "El Radio es: ".$radio."<br>";
        echo "<br><br>";
        echo "*** Resultado del Círculo ***<br>";
        echo "El Área es: ".$areadelCirculo."<br>";
        echo "El Perímetro es: ".$perimetrodelCirculo;
        echo "<br><br>";
    }
    ?>
    </div>
    <br><br>
    <a href="menu.php">[REGRESAR]</a>
</body>
</html>