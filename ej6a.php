<html>
<head>
   <title>Arrays 6</title>
</head>
<h1>Arrays 6: Eliminar modulo y array inverso</h1>
<body>

<?php
  
   #Raquel Alcázar

    $modulos1=array("Bases Datos", "Entornos Desarrollo", "Programacion");
    $modulos2=array("Sistemas Informaticos", "FOL", "Mecanizado");
    $modulos3=array("Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Ingles");

    $modulos=array_merge($modulos1, $modulos2, $modulos3);

    unset($modulos[array_search("Mecanizado", $modulos)]);

    $modulos=array_values($modulos);
    
    for($i=count($modulos)-1; $i>=0; $i--){

       echo $modulos[$i] ."</br>";
    } 

?>
</body>
</html>