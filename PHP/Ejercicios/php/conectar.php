<?php
function conexionBD(){
    if (!($link=mysqli_connect("localhost","root",""))){
        echo "no se ha conectado a la base de datos";
        exit();
    }
    if (!mysqli_select_db($link,"manoirjouet")){
        echo"no se ha conectado a electrium";
        exit();
    }
    return $link;
}
if($link=conexionBD()) {
    echo "no te creo pero funciona<br>";
}

?>