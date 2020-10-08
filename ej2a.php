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
    $numMedia=array();

    $num=1;
    
    for($i=0; $i<=20; $i++){
        if($num%2==0){
           $num++;
        }

        $numImpar[$i]=$num;

        if($i%2!=0){
            array_push($numMedia, $num);
        }

            echo "<tr>";
                echo "<th>" .$i ."</th>";
                echo "<th>" .$num ."</th>";
                echo "<th>" .($num+$i) ."</th>";
            echo "</tr>";

        $num++;
    }   

    echo "</table>";

    $suma=0;

    for($i=0; $i<count($numMedia); $i++){
        $suma+=$numMedia[$i];
    }

    echo "</br> Media de los numeros en posiciones impares = " .($suma/count($numMedia));
?>
</body>
</html>