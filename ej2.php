<html>
<head>
   <title>Strings 1</title>
</head>
<h1>Strings 1</h1>
<body>

<?php
  
    #Raquel Alcázar 

    $ip="192.18.16.204";

    echo "IP = ", $ip;

    #Se encuentra la posición que ocupa el primer "." de la IP y se almacena en $pos.
    
    $pos=strpos($ip, ".");

    /*Se almacena en $uno la parte de la IP que llega hasta la posición que ocupa el primer "." (de izquierda a derecha)*/

    $uno=substr($ip, 0, $pos);

    /*Se actualiza la $ip almacenando en ella la parte de la IP a partir de la derecha del "." (pos+1)*/

    $ipAux=substr($ip,$pos+1);

    /*Se repiten los pasos anteriores*/

	  $pos=strpos($ipAux, ".");
    $dos=substr($ipAux, 0, $pos);

	  $ipAux=substr($ipAux,$pos+1);

    $pos=strpos($ipAux, ".");
    $tres=substr($ipAux, 0, $pos);

	  $ipAux=substr($ipAux,$pos+1);

    $cuatro=$ipAux;

    /*Se convierte cada parte almacenada en binario con decbin y se rellenan con ceros a la izquierda cada una de ellas con str_pad, hasta completar 8 caracteres si no los tenían.*/
    
  	$binario1=str_pad(decbin($uno), 8, "0", STR_PAD_LEFT);
  	$binario2=str_pad(decbin($dos), 8, "0", STR_PAD_LEFT);
  	$binario3=str_pad(decbin($tres), 8, "0", STR_PAD_LEFT);
  	$binario4=str_pad(decbin($cuatro), 8, "0", STR_PAD_LEFT);

    #Se concatena cada parte resultante y los debidos puntos.

  	$resultado=$binario1 ."." .$binario2 ."." .$binario3 ."." .$binario4;

    #Se imprime el resultado.

  	echo "</br> Binario = ", $resultado;
?>
</body>
</html>