<html>
    <head>
        <title>Bucles, Arrays y Cadenas</title>
        <link href="../css/Fondo.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <center>
        <h1>Tabla del 1 </h1>
            <table border="1" align="center">
                <?php
                echo "<tr>";
                for ($cabecera="0";$cabecera<=10;$cabecera++){
                    echo "<th>";
                    echo $cabecera;
                    echo "</th>";
                }
                echo "</tr>";
                for ($x = 1; $x <=10; $x++){
                    echo "<tr>";
                    echo "<th>";
                    echo $x;
                    echo "</th>";
                    for ($y=1;$y<=10;$y++){
                        $multiplicacion=$x*$y;
                        echo "<td>";
                        echo $multiplicacion;
                        echo "</td>";
                    }
                    echo "</tr>";
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
            $dias = array("Lunes","Martes","Miercoles","Jueves","Viernes","Sabado","Domingo");
            echo "Dias: ".$dias[0]. ", " .$dias[1]. ", " .$dias[2]. ", " .$dias[3]. ", " .$dias[4]. ", " .$dias[5]. " and " .$dias[6];
            ?>
    </center>
    </body>
</html>