<html>
<head>
   <title>Arrays 2</title>
</head>
<h1>Arrays 2: 20 numeros impares + tabla</h1>
<body>

<?php
  
   #Raquel Alcázar

    echo "<table border=1>";
    echo "<tr>";
        echo "<th> Indice </th>";
        echo "<th> Valor </th>";
        echo "<th> Suma </th>";
    echo "</tr>";

    $numImpar=array();
    $mediaImpar=array();
    $mediaPar=array();

    $num=1;
    
    for($i=0; $i<20; $i++){

        $numImpar[$i]=$num;

        if($i%2!=0){
            array_push($mediaImpar, $num);
        }else{
            array_push($mediaPar, $num);
        }

            echo "<tr>";
                echo "<th>" .$i ."</th>";
                echo "<th>" .$num ."</th>";
                echo "<th>" .($num+$i) ."</th>";
            echo "</tr>";

        $num+=2;
    }   

    echo "</table>";

    $suma=0;

    for($i=0; $i<count($mediaImpar); $i++){
        $suma+=$mediaImpar[$i];
    }

    echo "</br> Media de los numeros en posiciones impares = " .($suma/count($mediaImpar));

    $suma=0;

    for($i=0; $i<count($mediaPar); $i++){
        $suma+=$mediaPar[$i];
    }

    echo "</br> Media de los numeros en posiciones pares = " .($suma/count($mediaImpar));
?>
</body>
</html>