<?php
function conexionBD(){
    if (!($link=mysqli_connect("localhost","root",""))){
        echo "no se ha conectado a la base de datos";
        exit();
    }
    if (!mysqli_select_db($link,"prueba")){
        echo"No se ha conectado a prueba";
        exit();
    }
    return $link;
}
if($link=conexionBD()) {
    echo "Conectadisimo<br>";
}

?>