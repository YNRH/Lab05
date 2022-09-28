<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01 - Operaciones con PHP</title>
</head>
<body>
    <form action="" method="post">
        Ingresar valor 1: <br><input type="text" name="valor1"><br>
        Ingresar valor 2: <br><input type="text" name="valor2"><br>
        Resultado : <br>
        <input type="submit" name="Suma" value="Suma">
    </form>

    <?php
        //Declaracion de variables
        date_default_timezone_set('America/Lima');
        if(isset($_POST['valor1'])){
            $numero1 = $_POST['valor1'];
        }
        if(isset($_POST['valor1'])){
            $numero2 = $_POST['valor2'];
        }
        if(isset($numero1) && isset($numero2)){
            $suma = $numero1 + $numero2;
            echo "El resultado de la suma es : ".$suma;
        }
        
    ?> 
</body>
</html>