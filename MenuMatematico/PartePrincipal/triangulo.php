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
    <title>Triángulo (Área y Perímetro)</title>
</head>
<body>
    <div class="container">
    <h1>Bienvenido a Triángulo (Área y Perímetro)</h1>
    <form action="triangulo.php" method="get">
        Ingrese la Base: 
        <input type="number" name="base" placeholder="Ingrese Base" required>
        <br><br>
        Ingrese la Altura: 
        <input type="number" name="altura" placeholder="Ingrese Altura" required>
        <br><br>
        Ingrese el Lado 1:
        <input type="number" name="lado1" placeholder="Ingrese Lado 1" required>
        <br><br>
        Ingrese el Lado 2:
        <input type="number" name="lado2" placeholder="Ingrese Lado 2" required>
        <br><br>
        Ingrese el Lado 3:
        <input type="number" name="lado3" placeholder="Ingrese Lado 3" required>
        <br><br>
        <input type="submit" value="Calcular Triángulo">
    </form>

    <?php
    if (isset($_GET["base"])&&isset($_GET["altura"])&&isset($_GET["lado1"])&&isset($_GET["lado2"])&&isset($_GET["lado3"])){
        $base = $_GET["base"];
        $altura = $_GET["altura"];
        $lado1 = $_GET["lado1"];
        $lado2 = $_GET["lado2"];
        $lado3 = $_GET["lado3"];

        $areadelTriangulo = ($base * $altura)/2;
        $perimetrodelTriangulo = $lado1 + $lado2 + $lado3;

        echo "<br><br>";
        echo "*** Datos Ingresados del Triángulo ***<br>";
        echo "La Base es: ".$base."<br>";
        echo "La Altura es: ".$altura."<br>";
        echo "El Lado 1 es: ".$lado1."<br>";
        echo "El Lado 2 es: ".$lado2."<br>";
        echo "El Lado 3 es: ".$lado3;
        echo "<br><br>";
        echo "*** Resultado del Triángulo ***<br>";
        echo "El Área es: ".$areadelTriangulo."<br>";
        echo "El Perímetro es: ".$perimetrodelTriangulo;
        echo "<br><br>";
    }
    ?>
    </div>
    <br><br>
    <a href="menu.php">[REGRESAR]</a>
</body>
</html>