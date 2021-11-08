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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
        $("select").change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
</script>
<body>
<center>
<div class="form">
    <form>
        <h1>MultiOpticas</h1>
        <label for="lentes">Tipo</label>
        <br>
        <br>
        <select name="lentes" id="lentes">
            <option value='modelo'>Monofocal Stock</option>
            <option value='Monofocal Fabricacion'>Monofocal Fabricacion</option>
            <option value='Progresivos'>Progresivos</option>
            <option value='Bifocales'>Bifocales</option>
        </select>
        <br>
        <br>
        <div class="modelo box">
            <label for=' medida'>Medida</label>
            <br>
            <br>
            <select name="modelo" id="modelo">
                <option value='modelo'>Expert</option>
                <option value='Neo-Silver'> Neo-Silver</option>
                <option value='HD-Gold'>HD-Gold</option>
                <option value='Individual Platinium'>Individual Platinium</option>
                <option value='Neo-Sport'>Neo-Sport</option>
                <option value='Taral (Mineral)'>Taral (Mineral)</option>
                <option value='Proaspherica'>Proaspherica</option>
            </select>
        </div>
    </form>
</div>
</center>
</body>
<?php
