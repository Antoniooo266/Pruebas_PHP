<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <link href="../css/Fondo.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<center>
    <h3>Tabla del 1 al 100</h3>
    <?php
        define('TAM',10); //definimos la constante para el tamaño
        echo "<table border=1 align='center'>"; //creamos la tabla
        $n=1;
        for ($n1=1; $n1<=TAM; $n1++) {
            if ($n1 % 2 == 0) //Si la división de la variable $n1 entre dos da 0 creamos una fila gris
                echo "<tr bgcolor=#bdc3d6>";
            else
                echo "<tr>"; //creamos fila blanca cuando no sea divisible entre 2
            for ($n2=1; $n2<=TAM; $n2++) {
                echo "<td>", $n, "</td>"; //creamos una celda y mostramos el número
                $n=$n+1; //sumamos 1 al número mostrado para la siguiente vuelta del bucle
            }
            echo "</tr>"; //cerramos la fila
        }
        echo "</table>"; //cerramos la tabla
    ?>
    <h1>Tablas de multiplicar</h1>
    <h3>Escribe un número del 1 al 10 y yo te diré la tabla de multiplicar.</h3>
    <form action="#" method="post">
        <p>Escribe aquí el número: <input type="text" name="num" maxlength="2" size="2" /></p>
        <p><input type="submit" value="Ver tabla de multiplicar." /></p>
    </form>
    <?php
    $n=$_POST['num'];
    if ($n<1 or $n>10) {
        echo "no has escrito un nůmero entre el 1 y el 10.";
    }
    else {
        echo "<h4>Tabla del $n:</h4>";
        $i=1;
        while ($i<=10) {
            echo "$n x $i = ".$n*$i."<br/>";
            $i++;
        }
    }
    ?>
</center>
</body>
</html>
