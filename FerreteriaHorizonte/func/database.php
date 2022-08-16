<?php
//ARCHIVO QUE CONTIENE LOS DATOS DE LA CONEXION A LA BASE DE DATOS
require_once ("../db/connect_db.php");


// FUNCION QUE REALIZA CONEXION A BASE DE DATOS MYSQL
function connect () 
{
  

  $conn = new PDO (KEY,USER,PSSWD);
  return $conn; 
 
}


?>