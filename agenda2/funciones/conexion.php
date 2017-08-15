<?php
  $conn = new mysqli('localhost', 'root', '', 'contactos');//requiere cuatro parametros host usuario password
  if ($conn -> connect_error){
    echo $error = $conn -> connect_error;// imprime error para la coneccion de la base de datos 
  }
 ?>
