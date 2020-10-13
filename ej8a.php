<html>
<head>
   <title>Arrays 8</title>
</head>
<h1>Arrays 8: Array asociativo</h1>
<body>

<?php
  
   #Raquel Alcázar

  /*  $alumnos=array("Juan"=>array("Bases Datos"=>5), "Ana"=>array("Bases Datos"=>7), "Marta"=>array("Bases Datos"=>5), "Adrián"=>array("Bases Datos"=>4), "Manuel"=>array("Bases Datos"=>8));


    foreach ($alumnos as $nombre => $info) {
      
      echo "<h2>$nombre </h1>";

      foreach ($info as $modulo => $nota) {
      
        echo "$modulo = $nota </br>";
      }

    }*/

    $notasBD=array("Juan"=>5, "Ana"=>4, "Marta"=>8, "Adrian"=>6, "Manuel"=>7);

    $alumnoMax=array_search(max($notasBD), $notasBD);
    $alumnoMin=array_search(min($notasBD), $notasBD);

    echo "Alumno con mejor nota: </br>" .$alumnoMax .", Nota: " .$notasBD[$alumnoMax] ."</br>";
    echo "</br> Alumno con peor nota: </br> " .$alumnoMin .", Nota: " .$notasBD[$alumnoMin];

    $suma=0;
    $cont=0;

    foreach ($notasBD as $nombre => $nota) {
      
      $suma+=$nota;
      $cont++;
    }

    echo "</br> </br> Media alumnos= " .($suma/$cont);
?>
</body>
</html>