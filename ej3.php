<html>
<head>
   <title>Strings 1</title>
</head>
<h1>Strings 1</h1>
<body>

<?php
  
    #Raquel Alcázar 

    $ip="192.168.16.100/16";
    
    #Se imprime la IP.

    echo "IP: ", $ip, "</br>";
    
    #Se encuentra la posición que ocupa "/".

    $pos=strpos($ip, "/");
    
    #Se define la máscara desde $pos+1 (para ignorar "/") hasta el último caracter de $ip (de izquierda a derecha).

    $mascara=substr($ip, $pos+1, strlen($ip));
    
    #Se imprime la máscara.

    echo "Mascara: ", $mascara;
    
    #Se define la IP sin la máscara, desde la posición 0 de $ip hasta $pos (posición de "/").

    $ip=substr($ip, 0, $pos);
    
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
    
    /*Se convierte cada parte almacenada en BINARIO con decbin y se rellenan con ceros a la izquierda cada una de ellas con str_pad, hasta completar 8 caracteres si no los tenían.*/
    
    $binario1=str_pad(decbin($uno), 8, "0", STR_PAD_LEFT);
    $binario2=str_pad(decbin($dos), 8, "0", STR_PAD_LEFT);
    $binario3=str_pad(decbin($tres), 8, "0", STR_PAD_LEFT);
    $binario4=str_pad(decbin($cuatro), 8, "0", STR_PAD_LEFT);
    
    #Se almacena el resultado obtenido en $resultado.

    $resultado=$binario1 .$binario2 .$binario3 .$binario4;

    #Se almacena en $bitsRed el número de bits del $resultado que corresponda a $mascara y los bits que falten hasta 32 se completan con CEROS a su derecha.
    
    $bitsRed=str_pad(substr($resultado, 0, $mascara), 32, "0", STR_PAD_RIGHT);
    
    #Se define la primera parte de la Dirección Red mediante substr, almacenando en $unoRed los 8 primeros caracteres de $bitsRed.
    
    $unoRed=substr($bitsRed, 0, 8);
    
    #Se actualiza $bitsRed eliminando esos 8 caracteres que se han almacenado en $unoRed.
    
    $bitsRed=substr($bitsRed, 8, strlen($bitsRed));
    
    #Se repiten los pasos anteriores.

    $dosRed=substr($bitsRed, 0, 8);
    
    $bitsRed=substr($bitsRed, 8, strlen($bitsRed));
    
    $tresRed=substr($bitsRed, 0, 8);
    
    $bitsRed=substr($bitsRed, 8, strlen($bitsRed));
    
    $cuatroRed=$bitsRed;
    
    #Se convierte cada parte de la Dirección Red a DECIMAL.
    
    $unoRed=bindec($unoRed);
    $dosRed=bindec($dosRed);
    $tresRed=bindec($tresRed);
    $cuatroRed=bindec($cuatroRed);

    #Se almacena en $direcRed la Dirección Red concatenando cada parte.
    
    $direcRed=$unoRed ."." .$dosRed ."." .$tresRed ."." .$cuatroRed;
    
    #Se imprime la Dirección Red.
    
    echo "</br> Direccion Red: " .$direcRed;

    #Se almacena en $bitsBroad el número de bits del $resultado que corresponda a $mascara y los bits que falten hasta 32 se completan con UNOS a su derecha.
    
    $bitsBroad=str_pad(substr($resultado, 0, $mascara), 32, "1", STR_PAD_RIGHT);
    
    #Se define la primera parte de la Dirección Broadcast mediante substr, almacenando en $unoBroad los 8 primeros caracteres de $bitsBroad.
    
    $unoBroad=substr($bitsBroad, 0, 8);
    
    #Se actualiza $bitsBroad eliminando esos 8 caracteres que se han almacenado en $unoBroad.
    
    $bitsBroad=substr($bitsBroad, 8, strlen($bitsBroad));
    
    #Se repiten los pasos anteriores.

    $dosBroad=substr($bitsBroad, 0, 8);
    
    $bitsBroad=substr($bitsBroad, 8, strlen($bitsBroad));
    
    $tresBroad=substr($bitsBroad, 0, 8);
    
    $bitsBroad=substr($bitsBroad, 8, strlen($bitsBroad));
    
    $cuatroBroad=$bitsBroad;
    
    #Se convierte cada parte de la Dirección Broadcast a DECIMAL.
    
    $unoBroad=bindec($unoBroad);
    $dosBroad=bindec($dosBroad);
    $tresBroad=bindec($tresBroad);
    $cuatroBroad=bindec($cuatroBroad);
    
    #Se almacena en $direcBroad la Dirección Broadcast concatenando cada parte.

    $direcBroad=$unoBroad ."." .$dosBroad ."." .$tresBroad ."." .$cuatroBroad;
    
    #Se imprime la Dirección Broadcast.
    
    echo "</br> Direccion Broadcast: " .$direcBroad;
    
    #Se suma 1 a la última parte de la Dirección Red y se resta 1 a la última parte de la Dirección Broadcast.
    
    $infAux=$cuatroRed+1;
    $supAux=$cuatroBroad-1;
    
    #Se almacena en $inferior la Dirección Red con la última parte actualizada ($infAux) y en $superior la Dirección Broadcast con la última parte igualmente actualizada ($supAux).
    
    $inferior=$unoRed ."." .$dosRed ."." .$tresRed ."." .$infAux;
    $superior=$unoBroad ."." .$dosBroad ."." .$tresBroad ."." .$supAux;
    
    #Se imprime el rango.
    
    echo"</br> Rango: " .$inferior ." a " .$superior;

?>
</body>
</html>