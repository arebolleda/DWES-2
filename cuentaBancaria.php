<HTML>
<HEAD> <TITLE>Ejercicio 1</TITLE> </HEAD>

<BODY>
<?php

 	#Raquel Alcázar
	
	$banco="2310";
	$sucursal="0005";
	$numCuenta="0006509784";

	#Primer dígito

	$suma=(substr($banco, 0, 1)*4)+(substr($banco, 1, 1)*8)+(substr($banco, 2, 1)*5)+(substr($banco, 3, 1)*10)+(substr($sucursal, 0, 1)*9)+(substr($sucursal, 1, 1)*7)+(substr($sucursal, 2, 1)*3)+(substr($sucursal, 3, 1)*6);

	$resto=$suma%11;
	$dc1=11-$resto;

	if($dc1==10){
		$dc1="1";
	}else{
		if ($dc1==11){
			$dc1="0";
		}
	}

	#Segundo dígito

	$suma=(substr($numCuenta, 0, 1))+(substr($numCuenta, 1, 1)*2)+(substr($numCuenta, 2, 1)*4)+(substr($numCuenta, 3, 1)*8)+(substr($numCuenta, 4, 1)*5)+(substr($numCuenta, 5, 1)*10)+(substr($numCuenta, 6, 1)*9)+(substr($numCuenta, 7, 1)*7)+(substr($numCuenta, 8, 1)*3)+(substr($numCuenta, 9, 1)*6);

	$resto=$suma%11;
	$dc2=11-$resto;

	if($dc2==10){
		$dc2="1";
	}else{
		if ($dc2==11){
			$dc2="0";
		}
	}

	$cuenta="$banco $sucursal $dc1$dc2 $numCuenta";

	echo $cuenta;

?>
</BODY>
</HTML>