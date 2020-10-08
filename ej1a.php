<html>
<head>
   <title>Arrays 1</title>
</head>
<h1>Arrays 1: 20 numeros impares + tabla</h1>
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

    $num=0;

    for($i=0; $i<20; $i++){
        if($num%2==0){
           $num++;
        }

        $numImpar[$i]=$num;
            echo "<tr>";
                echo "<th>" .$i ."</th>";
                echo "<th>" .$num ."</th>";
                echo "<th>" .($num+$i) ."</th>";
            echo "</tr>";
        
        $num++;
    }

   echo "</table>";

?>
</body>
</html>