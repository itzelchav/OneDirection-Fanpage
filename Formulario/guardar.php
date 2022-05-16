<?php

      include("abre.php");

      $Nombre     = $_POST['Nombre'];
      $Apellidos  = $_POST['Apellidos'];
      $Calle      = $_POST['Calle'];
      $Colonia    = $_POST['Colonia'];
      $Cp         = $_POST['Cp'];
      $Correo     = $_POST['Correo'];
      $Cel        = $_POST['Cel'];
      $Curso      = $_POST['Curso'];
      $Turno      = $_POST['Turno'];

      $consulta = "INSERT INTO clientes(Nombre, Apellidos, Calle, Colonia, Cp, Correo, Cel, Curso, Turno) VALUES
    ('$Nombre','$Apellidos','$Calle','$Colonia','$Cp','$Correo','$Cel','$Curso','$Turno')";

      if ($conexion->query($consulta) === TRUE){
      /*header("Location: index.php");/* regresa al formulario*/
      }else{
          echo "Error: " . $consulta . "<br>" . $conexion->error;
      }

      $conexion->close();

?>