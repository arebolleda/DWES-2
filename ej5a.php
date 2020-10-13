<html>
<head>
   <title>Arrays 5</title>
</head>
<h1>Arrays 5: Unir arrays</h1>
<body>

<?php
  
   #Raquel Alcázar

    $modulos1=array("Bases Datos", "Entornos Desarrollo", "Programacion");
    $modulos2=array("Sistemas Informaticos", "FOL", "Mecanizado");
    $modulos3=array("Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Ingles");

    #Primera forma

    echo "Primera forma: </br> </br>";

    $cont=count($modulos1);
    $contAux=0;

    while(count($modulos2)>0 || count($modulos3)>0){
        if(count($modulos2)>0){
            $modulos1[$cont]=$modulos2[$contAux];
            unset($modulos2[$contAux]);
            $cont++;
        }

        if(count($modulos3)>0){
            $modulos1[$cont]=$modulos3[$contAux];
            unset($modulos3[$contAux]);
            $cont++;
        }

        $contAux++;
    }  

    for($i=0; $i<count($modulos1); $i++){

       echo $modulos1[$i] ."</br>";
    }  
    
    echo "</br> Segunda forma: </br> </br>";

    $modulos1=array("Bases Datos", "Entornos Desarrollo", "Programacion");
    $modulos2=array("Sistemas Informaticos", "FOL", "Mecanizado");
    $modulos3=array("Desarrollo Web ES", "Desarrollo Web EC", "Despliegue", "Desarrollo Interfaces", "Ingles");

    #Segunda forma

    $modulos=array_merge($modulos1, $modulos2, $modulos3);

    for($i=0; $i<count($modulos); $i++){

       echo $modulos[$i] ."</br>";
    }  

    echo "</br>";

    #Tercera forma

    echo "Tercera forma: </br> </br>";

    while(count($modulos2)>0){
        array_push($modulos1,array_shift($modulos2));
        array_pop($modulos2);
    }

    while(count($modulos3)>0){
        array_push($modulos1,array_shift($modulos3));
        array_pop($modulos2);
    }

    for($i=0; $i<count($modulos1); $i++){

       echo $modulos1[$i] ."</br>";
    }  

    echo "</br>";


?>
</body>
</html>