<?php
session_start();
$_SESSION["valor1"]=$_POST["lentes"];
?>
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
        height: 250px;
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
        <form action="/PHP/Ejercicios/php/Sesion_1.php" method="post">
            <h1>MultiOpticas</h1>
            <label for="lentes">Familia de lentes</label>
            <br>
            <br>
            <select name="lentes" id="lentes">
                <option value="Expert">Expert</option>
                <option value="Neo-Silver">Neo-Silver</option>
                <option value="HD-Gold">HD-Gold</option>
                <option value="Individual Platinium">Individual Platinium</option>
                <option value="Digital Office">Digital Office</option>
                <option value="Neo-Sport">Neo-Sport</option>
                <option value="Taral (Mineral)">Taral (Mineral)</option>
                <option value="Proaspherica">Proaspherica</option>
            </select>
            <br>
            <br>
            <button name="boton" type="submit" style="padding: 10px 30px">Enviar ( • ͜ʖ • )</button>
        </form>
    </div>
</center>
</body>
</html>
