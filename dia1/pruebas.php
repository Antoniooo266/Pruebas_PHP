<html>
<head>
    <title>Pruebas PHP </title>
</head>
<body>
<h1>Tabla del 1 </h1>
<table border="1">
<?php
$i=1;
$n =1;

while ($i<=10) {
    echo"<tr><td>";
    echo   $n ."<td>". "x"."<td>".$i ."<td>" ."="."<td>".$n*$i."</td></tr>";
    $i++;
}
?>
</table>
<h1>Ejemplo 1</h1>
<?php
printf("El numero dos con diferenes formatos: %d %f %.2f",2,2,2);
?>
<h1>Cadena</h1>
<?php
$cadena="Esta cadena tiene 31 caracteres";
echo strlen($cadena);
echo"<br>";
$resultado=sprintf("8*5 = %d <br>", 8*5);
echo $resultado,"<br>";
echo substr("Devuelve una subcadena de otra", 9,3),"<br><br>";
if(chop("Cadena \n\n")=="Cadena")
    echo "Iguales<br><br>";
echo str_replace("azul","verde","Atrapado en tu mirada azul,tan azul como en mismo sueños.."),"<br>";
?>
<h1>Arrays</h1>
<?php
$comidas = array("Paella","Tortilla","Cocido");
echo "Men&cute;:".$comidas[0]. "," .$comidas[1]. "and" .$comidas[2]. "." ;
?>
<h2>Ejersisios</h2>
<?php
$dias = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
echo "Men&cute;:".$comidas[0]. "," .$comidas[1]. "and" .$comidas[2]. "." ;
?>
</body>
</html>