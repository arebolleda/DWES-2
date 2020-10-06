<html>
<head>
   <title>Bucles 3</title>
</head>
<h1>Bucles 3: Conversor Decimal a base 16</h1>
<body>

<?php

    #Raquel Alcázar
    
    $num="1515";
    $base="16";
    $resultado="";
    $hexadecimal="";
    echo "Decimal: " .$num ."</br>";


    while ($num>=$base){

        $resultado=$resultado ." " .$num%$base;
        $num=$num/$base;
    }

    $resultado=$resultado ." " .variant_int($num) ." ";

    do {
        $pos=strpos($resultado, " ");

        $valor=substr($resultado, 0, $pos);

        if($valor>9){
            switch ($valor) {
                case '10':
                    $valor="A";
                    break;
                case '11':
                    $valor="B";
                    break;
                case '12':
                    $valor="C";
                    break;
                case '13':
                    $valor="D";
                    break;
                case '14':
                    $valor="E";
                    break;
                default:
                    $valor="F";
                    break;
                }
        }

        $resultado=substr($resultado, $pos+1);

        $hexadecimal=$hexadecimal .$valor;

    }while($pos!==false);
    
    $hexadecimal=strrev($hexadecimal);

    echo "Hexadecimal: " .$hexadecimal;
?>
</body>
</html>