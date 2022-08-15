<?php
//ARCHIVO QUE CONTIENE LOS DATOS DE LA CONEXION A LA BASE DE DATOS
require_once ("../db/connect_db.php");

function connect () 
{
  

  $conn = new PDO (KEY,USER,PSSWD);
  return $conn; 
 
}


?>