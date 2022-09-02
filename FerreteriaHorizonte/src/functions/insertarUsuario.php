<?php
include_once("../../config/database.php");

$nombre = $_POST["nombre"];
$cedula = $_POST["cedula"];
$telefono = $_POST["telefono"];
$email = $_POST["email"];
$query = "INSERT INTO usuarios (nombre,cedula,telefono,email) VALUES ('$nombre', '$cedula', '$telefono', '$email')";
mysqli_query($mysqli, $query);

if(!mysqli_error($mysqli)){

    echo '{
        "success":true,
        "message":"Usuario agregado correctamente - '.$nombre.'"  
    }';

}else{

    echo '{
        "success":false,
        "message":"Error: "'.mysqli_error($mysqli).'"  
    }';
}
