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
    <title>Operadores Matematicas</title>
</head>
<body>
    <div class="container">
        <h1>Bienvenido a los Operadores Matemáticos!</h1>
        <form action="" method="post">
            <label for="numero1">Número 1: </label>
            <input type="number" name="numero1" placeholder="Ingrese Número" required>
            <br>

            <label for="numero2">Número 2: </label>
            <input type="number" name="numero2" placeholder="Ingrese Número" required>
            <br><br>

            <label for="operacion">Seleccione la Operación: </label>
            <select name="operacion" id="">
                <option value="suma">Suma (+)</option>
                <option value="resta">Resta (-)</option>
                <option value="multiplicacion">Multiplicación (*)</option>
                <option value="division">División (/)</option>
            </select>
            <br>

            <input type="submit" value="Calcular Operacion" class="inputA">
        </form>

        <?php 
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $numero1 = $_POST["numero1"];
            $numero2 = $_POST["numero2"];
            $operacion = $_POST["operacion"];

            $resultado = 0;
            $seleccionado = '';

            if ($operacion == "suma") {
                $resultado = $numero1 + $numero2;
                $seleccionado = 'Suma (+)';
            } elseif  ($operacion == "resta") {
                $resultado = $numero1 - $numero2;
                $seleccionado = 'Resta (-)';
            } elseif  ($operacion == "multiplicacion") {
                $resultado = $numero1 * $numero2;
                $seleccionado = 'Multiplicación (*)';
            } elseif  ($operacion == "division") {
                if ($numero2 != 0) {
                    $resultado = $numero1 / $numero2;
                    $seleccionado = 'División (/)';
                } else {
                    $resultado = "No se puede dividir con 0, pruebe de nuevo...";
                }
            } else {
                $resultado = "No hay operación";
            }
            
            echo "<br>";
            echo "Operador: ".$seleccionado.'<br><br>';
            echo "Número 1: ".$numero1.'<br>';
            echo "Número 2: ".$numero2.'<br>';
            echo "Resultado: ".$resultado;
        }
        ?>

        <br><br>
        <a href="menu.php">[REGRESAR]</a>
    </div>

    
</body>
</html>