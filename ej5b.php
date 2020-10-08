<html>
<head>
   <title>Bucles 5</title>
</head>
<h1>Bucles 5: Tabla multiplicar con tabla HTML</h1>
<body>

<?php

    #Raquel Alcázar
    
    $num=8;

    echo "<table border=1>";
    echo "<tr>";
    	echo "<th> Operacion </th>";
    	echo "<th> Resultado </th>";
    echo "</tr>";

    for($i=0; $i<=10; $i++){
    	echo "<tr>";
    		echo "<td>"; echo $num ." x " .$i; echo "</td>";
    		echo "<td>"; echo $num*$i; echo "</td>"; 
        echo "</tr>";
    }

   echo "</table>";


?>
</body>
</html>