 <?php

$horas=$_POST['horas'];
$pago=$_POST['pago'];

$salario=$horas*$pago;

echo "El salario es: ".$salario;

?>