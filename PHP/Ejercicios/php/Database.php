<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Ejemplo de uso de bases de datos con PHP y MySQL </h1>
<?php
include("Conectar.php");
$link=conexionBD();
echo "<br>";
$result = mysqli_query($link, "SELECT * from prueba");
?><table border="1" cellspacing="1" cellpadding="1">
    <tr><td>&nbsp;Nombre</td><td>&nbsp;Apellidos&nbsp;</td></tr>
    <?php
    while($row = mysqli_fetch_array($result)){
        printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td></tr>",
            $row["Nombre"],$row["Apellidos"]);
    }
    mysqli_free_result($result);
    mysqli_close($link)
    ?></table>
</body>
</html>