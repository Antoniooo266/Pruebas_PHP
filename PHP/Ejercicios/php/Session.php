<?php
session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">


    <?php

    if (!isset($_SESSION["tipo"]) && !isset($_POST["tipo"])){
        echo "<select onchange='this.form.submit()'  name='tipo'>";
        echo "<option disabled >--Seleccione tipo de lentes--</option>";
        echo "<option value='Stock'>Monofocal Stock</option>";
        echo "<option value='Fabricacion'>Monofocal Fabricación</option>";
        echo "<option value='Progresivo'>Progresivos</option>";
        echo "<option value='Bifocales'>Bifocales</option>";
        echo "</select>";
        echo "<br>";

    }else{
        if (!isset($_SESSION["tipo"])){
            $_SESSION["tipo"]=$_POST["tipo"];}

        echo "<select><option selected disabled>".$_SESSION['tipo']."</option></select><br>";
        if (!isset($_SESSION["modelo"]) && !isset($_POST["modelo"])){
            echo "<select name='modelo' onchange='this.form.submit()' >";
            echo "<option disabled >Seleccione modelo</option>";
            echo "<option value='expert'>expert</option>";
            echo "<option value='Neo-Silver'>Neo-Silver</option>";
            echo "<option value='HD_Gold'>HD-Gold</option>";
            echo "<option value='Individual Platinum'>Individual Platinum</option>";
            echo "<option value='Digital Office'>Digital Office</option>";
            echo "<option value='Neo-Sport'>Neo-Sport</option>";
            echo "<option value='Taral'>Taral</option>";
            echo "<option value='Proaspherica'>Proaspherica</option>";
            echo "</select><br>";

        }else{
            if (!isset($_SESSION["modelo"])){
                $_SESSION["modelo"]=$_POST["modelo"];}
            echo "<select><option selected disabled>".$_SESSION['modelo']."</option></select><br>";

            if (!isset($_SESSION["medida"])&& !isset($_POST["medida"])){
                echo "<select name='medida' onchange='this.form.submit()'>";
                echo "<option disabled >Seleccione medidas</option>";
                echo "<option value='14mm'>14mm</option>";
                echo "<option value='18mm'>18mm</option>";
                echo "</select><br>";
            }else{
                if (!isset($_SESSION["medida"])){
                    $_SESSION["medida"]=$_POST["medida"];}
                echo "<select><option selected disabled>".$_SESSION['medida']."</option></select><br>";
            }
        }
    }
    ?>



</form>
</body>
</html>