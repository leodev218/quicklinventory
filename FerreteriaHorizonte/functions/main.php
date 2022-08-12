<?php
//ARCHIVO QUE CONTIENE LOS DATOS DE LA CONEXION A LA BASE DE DATOS

function connect () 
{
    $conn = new PDO ('mysql:host=localhost;dbname=fastfile','root','');
      return $conn; 

}


?>
