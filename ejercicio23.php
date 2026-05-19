 <?php

$precio=$_POST['precio'];

$iva=$precio*0.13;
$total=$precio+$iva;

echo "Precio con IVA: ".$total;

?>