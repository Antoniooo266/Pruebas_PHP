<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/Fondo.css">
    <title>Sesiones</title>
</head>
<style>
    body{
        text-align: center;
        color: aliceblue;
        background-image: url("https://i.pinimg.com/564x/61/01/83/610183ad5ae2528984151590e6315896.jpg");
    }
    .form {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL0AAAELCAMAAAC77XfeAAAAA1BMVEWxm9kOXJBcAAAASElEQVR4nO3BMQEAAADCoPVPbQ0PoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADeDcYqAAE00FRDAAAAAElFTkSuQmCC");
        border-radius: 20px;
        box-sizing: border-box;
        height: 350px;
        padding: 20px;
        width: 320px;
        margin-top: 100px;
    }
    .pit {
        background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL0AAAELCAMAAAC77XfeAAAAA1BMVEWxm9kOXJBcAAAASElEQVR4nO3BMQEAAADCoPVPbQ0PoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADeDcYqAAE00FRDAAAAAElFTkSuQmCC");
        border-radius: 20px;
        box-sizing: border-box;
        height: 25px;
        padding: 20px;
        width: 320px;
        margin-top: 100px;
    }
    div{
        display: block;
    }
</style>
<body>
<center>
    <div class="form">
        <form method="get">
            <h1>Updateame esta</h1>
            <label>Nombre</label>
            <br>
            <br>
            <label>
                <input type="text" name="nombre">
            </label>
            <br>
            <br>
            <label>Nuevo Nombre</label>
            <br>
            <br>
            <label>
                <input type="text" name="nuevo">
            </label>
            <br>
            <br>
            <button name="boton" type="submit" style="padding: 10px 30px">Enviar ( • ͜ʖ • )</button>
        </form>
    </div>
</center>
<?php
include("Conectar.php");
$nombre = $_GET['nombre'];
$nuevonombre = $_GET['nuevo'];
$link=conexionBD();
mysqli_query($link,"UPDATE `prueba` SET Nombre = '$nuevonombre' WHERE Nombre = '$nombre'");
echo "<center>";
echo "<div class='pit'>";
echo "Se ha actualizado el registro";
echo "</div>";
echo "</center>"
?>
</body>
</html>