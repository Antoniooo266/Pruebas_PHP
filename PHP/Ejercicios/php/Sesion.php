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
        height: 260px;
        padding: 20px;
        width: 320px;
        margin-top: 100px;
    }
    div{
        display: block;
    }
</style>
<body>
<?php
session_start();
$_SESSION["valor"]=$_POST["lentes"];
echo "<center>";
    echo "<div class='form'>";
        echo "<form>";
            echo "<h1>MultiOpticas</h1>";
            echo "<label for='lentes'>Tipo</label>";
            echo "<br>";
            echo "<br>";
            echo "<select name='lentes' id='lentes'>";
                echo "<option value='Monofocal Stock'>Monofocal Stock</option>";
                echo "<option value='Monofocal Fabricacion'>Monofocal Fabricacion</option>";
                echo "<option value='Progresivos'>Progresivos</option>";
                echo "<option value='Bifocales'>Bifocales</option>";
            echo "</select>";
            echo "<br>";
            echo "<br>";
            echo "<button name='boton' type='submit' style='padding: 10px 30px' onchange='this.form.submit()'>Enviar ( • ͜ʖ • )</button>";
        echo "</form>";
    echo "</div>";
echo "</center>";

if(isset(){
    $tipo = $_GET["lentes"];
    echo "<center>";
    echo "<div class = form>";
    echo "<form>";
    echo "<br>";
    echo "<br>";
    echo "<label>Modelo</label>";
            echo "<br>";
            echo "<br>";
            echo "<select name='modelo' id='modelo'>";
                echo "<option value='Expert'> Expert</option>";
                echo "<option value='Neo-Silver'> Neo-Silver</option>";
                echo "<option value='HD-Gold'>HD-Gold</option>";
                echo "<option value='Individual Platinium'>Individual Platinium</option>";
                echo "<option value='Digital Office'>Digital Office</option>";
                echo "<option value='Neo-Sport'>Neo-Sport</option>";
                echo "<option value='Taral (Mineral)'>Taral (Mineral)</option>";
                echo "<option value='Proaspherica'>Proaspherica</option>";
            echo "</select>";
            echo "<br>";
            echo "<br>";
            echo "<button name='boton' type='submit' style='padding: 10px 30px' onchange='this.form.submit()'>Enviar ( • ͜ʖ • )</button>";
    echo "<br>";
    echo "<br>";
            echo "El tipo de lente que eligio fue: ".$tipo;
    echo "</form>";
    echo "</div>";
    echo "</center>";
}

if(isset($_GET["modelo"])){
    $modelo = $_GET["modelo"];
    echo "<center>";
    echo "<div class = form>";
    echo "<form>";
    echo "<br>";
    echo "<br>";
    echo "<label for=' medida'>Medida</label>";
            echo "<br>";
            echo "<br>";
            echo "<select name='medida' id='medida'>";
                echo "<option value='14mm'>14mm</option>";
                echo "<option value='18mm'>18mm</option>";
            echo "</select>";
            echo "<br>";
            echo "<br>";
            echo "<button name='boton' type='submit' style='padding: 10px 30px' onchange='this.form.submit()'>Enviar ( • ͜ʖ • )</button>";
    echo "<br>";
    echo "<br>";
            echo "El tipo de lente que eligio fue: ".$modelo;
    echo "</form>";
    echo "</div>";
    echo "</center>";
}

if(isset($_GET["medida"])) {
    $medida = $_GET["medida"];
    echo "<center>";
    echo "<div class = form>";
    echo "<h1>Tu Pedido</h1>";
    echo "El tipo de lente que eligio fue: ".$medida;
    echo "</div>";
}
echo "hola".$modelo;
?>
</body>
</html>