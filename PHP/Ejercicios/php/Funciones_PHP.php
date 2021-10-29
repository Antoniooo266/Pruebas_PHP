<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/Fondo.css" rel="stylesheet" type="text/css"/>
    <link href="../php/Funciones_PHP.php" rel="script">
    <title>Alumnos</title>
</head>
<body>
<h1>Funciones PHP</h1>
<table align="center" border="1px" style="background-color: #ad6ca6">
    <tr>
        <td align="center" colspan="8">2 DAM NOTAS</td>
    </tr>
    <tr>
        <td>Alumno</td>
        <td>SGE</td>
        <td>ING II</td>
        <td>AD</td>
        <td>PSP</td>
        <td>PMDM</td>
        <td>DIN</td>
        <td>EIE</td>
    </tr>
    <tr>
        <td>Sergi Pato</td>
        <td>7</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>3</td>
        <td>7</td>
        <td>6</td>
    </tr>
    <tr>
        <td>Llavi</td>
        <td>6</td>
        <td>8</td>
        <td>9</td>
        <td>5</td>
        <td>8</td>
        <td>3</td>
        <td>2</td>
    </tr>
    <tr>
        <td>Cucas</td>
        <td>5</td>
        <td>7</td>
        <td>5</td>
        <td>7</td>
        <td>3</td>
        <td>8</td>
        <td>5</td>
    </tr>
    <tr>
        <td>Nicu</td>
        <td>5</td>
        <td>7</td>
        <td>3</td>
        <td>7</td>
        <td>1</td>
        <td>8</td>
        <td>7</td>
    </tr>
    <tr>
        <td>Anguel</td>
        <td>8</td>
        <td>6</td>
        <td>6</td>
        <td>2</td>
        <td>4</td>
        <td>6</td>
        <td>9</td>
    </tr>
</table>
<br>
<center><input type="submit" name="test" id="test" value="Calcular Promedio" /><br/></center>

<p></p>
</body>

</html>
<?php
if(array_key_exists('test',$_POST)){
    CalcularPromedio();
}
function CalcularPromedio(){
    $Sergipato = [7,5,6,7,3,7,6];
    $Llavi = [6,8,9,5,8,3,2];
    $Cucas = [5,7,5,7,3,8,5];
    $Nicu = [5,7,3,7,1,8,7];
    $Anguel = [8,6,6,2,4,6,9];

    $media = array_sum($Sergipato)/count($Sergipato);
    echo "<p> Hola $media </p>";
}
?>

