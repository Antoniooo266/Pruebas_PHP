<?php
$codigo1 = $_GET['producto1'];
$codigo2 = $_GET['producto2'];
$codigo3 = $_GET['producto3'];
$precio1 = $_GET['precio1'];
$precio2 = $_GET['precio2'];
$precio3 = $_GET['precio3'];
$iva1 = (($precio1*21)/100);
$iva2 = (($precio2*10)/100);
$iva3 = (($precio2*4)/100);
$ivatotal = ($iva1+$iva2+$iva3);
$sumaprecio = ($precio1+$precio2+$precio3);
$totalresultante = ($sumaprecio+$ivatotal);
$descuentos = ($totalresultante-(($totalresultante*5)/100));
echo "La suma total de los precios es ".$sumaprecio."€<br>";
echo "El IVA total de los productos es ".$ivatotal."€<br>";
echo "El total resultante es ".$totalresultante."€<br>";
echo "El total con el descuento es ".$descuentos."€<br>";
?>
