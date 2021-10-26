<?php
//Declaracion de variables
    $nombre = $_POST['nombre'];
    $cod_postal = $_POST['cod'];
    $dni = $_POST['dni'];
    $dir = $_POST['dirc'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $cod_ven = $_POST['cod_ven'];
    $facts = $_POST['facts'];

    //Ejecutar las funciones
    validarnombre($nombre);
    validar_dni($dni);
    validar_postal($cod_postal);
    validar_tel($tel);
    validar_email($email);
    validar_cod_ven($cod_ven);
    validar_facts($facts);

    //Nombre cliente
    function validarnombre($nombre){
        $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        for ($i=0; $i<strlen($nombre); $i++){
            if (strpos($permitidos, substr($nombre,$i,1))===false){
                echo "Nombre del Usuario ";
                echo $nombre . " --> No es válido mi rey<br>";
                return false;
            }
        }
        echo "Nombre del Usuario ";
        echo $nombre . " --> Es válido mi rey<br>";
        return true;
    }

    //Validacion DNI
    function validar_dni($dni){
        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);
        if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra && strlen($letra) == 1 && strlen ($numeros) == 8 ){
            echo "DNI: ";
            echo $dni . " --> Es válido mi rey<br>";
        }else{
            echo "DNI: ";
            echo $dni . " --> No es válido mi rey<br>";
        }
    }

    //Validacion Codigo_Postal
    function validar_postal($cod_postal){
        //Comrpobamos que realmente se ha añadido el formato correcto
        if(preg_match('/^[0-9]{5}$/i', $cod_postal)) {
            //La instruccion se cumple
            echo "Codigo Postal: ";
            echo $cod_postal . " --> Es válido mi rey<br>";
            return true;
        }
        else{
            //Contiene caracteres no validos
            echo "Codigo Postal: ";
            echo $cod_postal . " --> No es válido mi rey<br>";
            echo $cod_postal . " --> No es válido mi rey<br>";
            return false;
        }
    }

    function validar_tel($tel){
        //Comrpobamos que realmente se ha añadido el formato correcto
        if(preg_match('/^[0-9]{9}$/i', $tel)) {
            //La instruccion se cumple
            echo "Telefono: ";
            echo $tel . " --> Es válido mi rey<br>";
            return true;
        }
        else{
            //Contiene caracteres no validos
            echo "Telefono: ";
            echo $tel . " --> No es válido mi rey<br>";
            return false;
        }
    }

    function validar_email($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Email: ";
            echo "Esta dirección de correo ($email) es válida mi rey.<br>";
        }else{
            echo "Email: ";
            echo "Esta direccion de correo ($email) no es valida mi rey.<br>";
        }
    }

    function validar_cod_ven($cod_ven){
        if(preg_match('/^[0-9]{3}$/i', $cod_ven)) {
            //La instruccion se cumple
            echo "Codigo Vendedor: ";
            echo $cod_ven . " --> Es válido mi rey<br>";
            return true;
        }
        else{
            //Contiene caracteres no validos
            echo "Codigo Vendedor: ";
            echo $cod_ven . " --> No es válido mi rey<br>";
            return false;
        }
    }

    function validar_facts($facts){
        if (is_float($facts)){
            echo "Factura: ";
            echo $facts . " --> No es válido mi rey<br>";
            return false;
        }else{
            echo "Factura: ";
            echo $facts . " --> Es válido mi rey<br>";
            return true;
        }
    }

?>
