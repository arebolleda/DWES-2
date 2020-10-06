<html>
<head>
   <title>Bucles 2</title>
</head>
<h1>Bucles 2: Conversor Decimal a base n</h1>
<body>

<?php
  
    #Raquel Alcázar
    
    $num="48";
    $base="6";
    $resultado="";

    echo "Decimal: " .$num ."</br>";

    while ($num>=$base){
        $resultado=$resultado .$num%$base;
        $num=$num/$base;
    }


    $resultado=strrev($resultado .variant_int($num));

    echo "Base " .$base .": " .$resultado;


?>
</body>
</html>