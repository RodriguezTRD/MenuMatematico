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
    <title>Cuadrado (Área y Perímetro)</title>
</head>
<body>
    <div class="container">
    <h1>Bienvenido a Cuadrado (Área y Perímetro)</h1>
    <form action="cuadrado.php" method="get">
        Ingrese el Lado: 
        <input type="number" name="lado" placeholder="Ingrese Lado" required>
        <br><br>
        <input type="submit" value="Calcular Cuadrado">
    </form>

    <?php
    if (isset($_GET["lado"])){
        $lado = $_GET["lado"];

        $areadelCuadrado = $lado * $lado;
        $perimetrodelCuadrado = $lado * 4;

        echo "<br><br>";
        echo "*** Datos Ingresados del Cuadrado ***<br>";
        echo "El Lado es: ".$lado."<br>";
        echo "<br><br>";
        echo "*** Resultado del Cuadrado ***<br>";
        echo "El Área es: ".$areadelCuadrado."<br>";
        echo "El Perímetro es: ".$perimetrodelCuadrado;
        echo "<br><br>";
    }
    ?>
    </div>
    <br><br>
    <a href="menu.php">[REGRESAR]</a>
</body>
</html>