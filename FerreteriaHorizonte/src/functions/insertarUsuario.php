<?php
include_once("../../config/database.php");
include_once("../entities/Usuario.php");

$newUser = new Usuario(
    $userDocument=$_POST['documentoUsuaio'],
    $userName=$_POST['nombreUsuario'],
    $userSurname=$_POST['apellidoUsuario'],
    $useremail=$_POST['correoUsuario'],
    $userPhone=$_POST['telefonoUsuario'],
    $userRol=$_POST['rolUsuario'],
    $userPassword=$_POST['conrrfimarContraseña']
);

// NUEVA INSTANCIA DE LA CLASE DATABASE
$db = new Database();
// ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
$con = $db->conectar();
// DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
$sql = $con->prepare("INSERT INTO usuario (documento_usuario,nombre_usuario,apellido_usuario,correo_usuario,telefono_usuario,rol,contraseña) VALUES ('$userDocument','$userName','$userSurname','$useremail','$userPhone','$userRol','$userPassword');");

// EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
$sql->execute();
print('<div class="alert alert-info" role="alert">
A simple info alert—check it out!
</div>');
?>

