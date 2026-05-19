 <?php

$precio=$_POST['precio'];

$descuento=$precio*0.10;
$total=$precio-$descuento;

echo "Total con descuento: ".$total;

?>