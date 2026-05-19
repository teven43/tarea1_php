 <?php

$n=$_POST['n'];

$suma=0;

for($i=1;$i<=$n;$i++)
{

$suma=$suma+$i;

}

echo "La suma consecutiva es: ".$suma;

?>