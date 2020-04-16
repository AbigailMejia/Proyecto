<?php
$valor1=_POST['n1'];
$valor2=_POST['n2'];
$operador=_POST['operacion']


if ($operador=="Suma") 
{
	$Total=$valor1=_POST+$valor2=_POST;

echo "La suma es".$Total;
}

else if ($operador=="Resta") 
{
	$Total=$valor1=_POST-$valor2=_POST;

echo "La resta es".$Total;
}

else if ($operador=="Multiplicacion") 
{
	$Total=$valor1=_POST*$valor2=_POST;

echo "La multiplicacion es".$Total;
}


else if ($operador=="Division") 
{
	$Total=$valor1=_POST/$valor2=_POST;

echo "La division es".$Total;
}
?>