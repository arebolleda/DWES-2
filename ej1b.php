<html>
<head>
   <title>Bucles 1</title>
</head>
<h1>Bucles 1: Decimal a binario</h1>
<body>

<?php
  
   #Raquel Alcázar

    $num="168";
    $binario="";

    echo "Decimal: " .$num ."</br>";

    while (($num)>=2){
    	$binario=$binario .$num%2;
    	$num=$num/2;
    }
    
    $binario=strrev($binario .(variant_int($num)));

    echo "Binario: " .$binario;

?>
</body>
</html>