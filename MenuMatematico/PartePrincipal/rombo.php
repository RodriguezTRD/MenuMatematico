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
    <title>Rombo (Área y Perímetro)</title>
</head>
<body>
    <div class="container">
    <h1>Bienvenido a Rombo (Área y Perímetro)</h1>
    <form action="rombo.php" method="get">
        Ingrese el Diagonal Mayor: 
        <input type="number" name="diagonalMayor" placeholder="Ingrese Diagonal Mayor" required>
        <br><br>
        Ingrese el Diagonal Menor: 
        <input type="number" name="diagonalMenor" placeholder="Ingrese Diagonal Menor" required>
        <br><br>
        Ingrese el Lado:
        <input type="number" name="lado" placeholder="Ingrese Lado" required>
        <br><br>
        <input type="submit" value="Calcular Rombo">
    </form>

    <?php
    if (isset($_GET["diagonalMayor"])&&isset($_GET["diagonalMenor"])&&isset($_GET["lado"])){
        $diagonalMayor = $_GET["diagonalMayor"];
        $diagonalMenor = $_GET["diagonalMenor"];
        $lado = $_GET["lado"];

        $areadelRombo = ($diagonalMayor * $diagonalMenor)/2;
        $perimetrodelRombo = $lado * 4;

        echo "<br><br>";
        echo "*** Datos Ingresados del Rombo ***<br>";
        echo "El Diagonal Mayor es: ".$diagonalMayor."<br>";
        echo "El Diagonal Menor es: ".$diagonalMenor."<br>";
        echo "El Lado es: ".$lado;
        echo "<br><br>";
        echo "*** Resultado del Rombo ***<br>";
        echo "El Área es: ".$areadelRombo."<br>";
        echo "El Perímetro es: ".$perimetrodelRombo;
        echo "<br><br>";
    }
    ?>
    </div>
    <br><br>
    <a href="menu.php">[REGRESAR]</a>
</body>
</html>