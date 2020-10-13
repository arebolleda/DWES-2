<html>
<head>
   <title>Arrays 7</title>
</head>
<h1>Arrays 7: Array asociativo</h1>
<body>

<?php
  
   #Raquel Alcázar

    $alumnos=array("Juan"=>21, "Ana"=>20, "Marta"=>23, "Adrian"=>23, "Manuel"=>22);

    #Mostrar el contenido del array utilizando bucles

    foreach ($alumnos as $nombre => $edad) {
      
      echo "Nombre: $nombre, Edad: $edad <br>";
    }

    echo "</br>";

    /*Los siguientes puntos no tienen sentido en un array asociativo:
        1. Sitúa el puntero en la segunda posición del array y muestra su valor
        2. Avanza una posición y muestra el valor
        3. Coloca el puntero en la última posición y muestra el valor */


    #Ordena el array por orden de edad (de menor a mayor) y muestra la primera posición del array y la última.

    asort($alumnos);  

    foreach ($alumnos as $nombre => $edad) {
      
      echo "Nombre: $nombre, Edad: $edad <br>";
    }

?>
</body>
</html>