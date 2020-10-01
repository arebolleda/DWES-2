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

    $ip=substr($ip,$pos+1);

    /*Se repiten los pasos anteriores*/

    $pos=strpos($ip, "."); 
    $dos=substr($ip, 0, $pos);

    $ip=substr($ip,$pos+1);

    $pos=strpos($ip, ".");
    $tres=substr($ip, 0, $pos);

    $ip=substr($ip,$pos+1);

    $cuatro=$ip;
    
    /*Con printf se rellenan con ceros a la izquierda los bits faltantes y se imprime el resultado.*/

    printf("</br> Binario = %08b.%08b.%08b.%08b", $uno, $dos, $tres, $cuatro);
    
?>
</body>
</html>