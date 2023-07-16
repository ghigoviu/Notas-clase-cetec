<?php
   include('./conexion.php');
   echo "Este es guardar.php";
   $nombre=$_POST['nombre'];
   $edad=$_POST['edad'];
   $carrera=$_POST['carrera'];
   $equipo_computo=$_POST['equipo_computo'];
   $promedio=$_POST['promedio']; 
   $sql="INSERT INTO alumnos
   (nombre,edad,carrera,promedio) VALUES
   ('$nombre','$edad','$carrera','$promedio');";
   if($conexion->query($sql)==TRUE)
      echo "Registro agregado correctamente";
?>   