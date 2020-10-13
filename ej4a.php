<html>
<head>
   <title>Arrays 4</title>
</head>
<h1>Arrays 4: 20 primeros numeros binarios y array_reverse()</h1>
<body>

<?php
  
   #Raquel Alcázar

    echo "<table border=1>";
    echo "<tr>";
        echo "<th> Indice </th>";
        echo "<th> Binario </th>";
    echo "</tr>";

    $num=0;
    $binario=array();
    
    for($i=0; $i<20; $i++){

        $numBin=str_pad(decbin($num), 5, 0, STR_PAD_LEFT);

        array_push($binario, $numBin);

        $num++;
    }   

    $binRever=array_reverse($binario);

    for($i=0; $i<20; $i++){

        echo "<tr>";
            echo "<th>" .$i ."</th>";
            echo "<th>" .$binRever[$i] ."</th>";
        echo "</tr>";
    }

    echo "</table>";
?>
</body>
</html>