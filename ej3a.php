<html>
<head>
   <title>Arrays 3</title>
</head>
<h1>Arrays 3: 20 primeros numeros binarios y octales</h1>
<body>

<?php
  
   #Raquel Alcázar

    echo "<table border=1>";
    echo "<tr>";
        echo "<th> Indice </th>";
        echo "<th> Binario </th>";
        echo "<th> Octal </th>";
    echo "</tr>";

    $num=0;
    $binario=array();
    
    for($i=0; $i<20; $i++){

        $numBin=str_pad(decbin($num), 5, 0, STR_PAD_LEFT);

        array_push($binario, $numBin);
        

        echo "<tr>";
            echo "<th>" .$i ."</th>";
            echo "<th>" .$numBin ."</th>";
            echo "<th>" .decoct($num) ."</th>";
        echo "</tr>";

        $num++;
    }   

    echo "</table>";
?>
</body>
</html>