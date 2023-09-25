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
    <title>Trapecio (Área y Perímetro)</title>
</head>
<body>
    <div class="container">
    <h1>Bienvenido a Trapecio (Área y Perímetro)</h1>
    <form action="trapecio.php" method="get">
        Ingrese el Base Mayor: 
        <input type="number" name="baseMayor" placeholder="Ingrese Base Mayor" required>
        <br><br>
        Ingrese el Base Menor: 
        <input type="number" name="baseMenor" placeholder="Ingrese Base Menor" required>
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
        <input type="submit" value="Calcular Trapecio">
    </form>

    <?php
    if (isset($_GET["baseMayor"])&&isset($_GET["baseMenor"])&&isset($_GET["altura"])&&isset($_GET["lado1"])&&isset($_GET["lado2"])){
        $baseMayor = $_GET["baseMayor"];
        $baseMenor = $_GET["baseMenor"];
        $altura = $_GET["altura"];
        $lado1 = $_GET["lado1"];
        $lado2 = $_GET["lado2"];

        $areadelTrapecio = (($baseMayor * $baseMenor)*$altura)/2;
        $perimetrodelTrapecio = $baseMayor + $baseMenor + $lado1 + $lado2;;

        echo "<br><br>";
        echo "*** Datos Ingresados del Trapecio ***<br>";
        echo "La Base Mayor es: ".$baseMayor."<br>";
        echo "La Base Menor es: ".$baseMenor."<br>";
        echo "La Altura es: ".$altura."<br>";
        echo "El Lado 1 es: ".$lado1."<br>";
        echo "El Lado 2 es: ".$lado2;
        echo "<br><br>";
        echo "*** Resultado del Trapecio ***<br>";
        echo "El Área es: ".$areadelTrapecio."<br>";
        echo "El Perímetro es: ".$perimetrodelTrapecio;
        echo "<br><br>";
    }
    ?>
    </div>
    <br><br>
    <a href="menu.php">[REGRESAR]</a>
</body>
</html>