<?php
include_once("../../config/database.php");
include('../entities/Usuario.php');

        $userDocument=$_POST['documentoUsuario'];
        $userName=$_POST['nombreUsuario'];
        $userSurname=$_POST['apellidoUsuario'];
        $useremail=$_POST['correoUsuario'];
        $userPhone=$_POST['telefonoUsuario'];
        $userRol=$_POST['rolUsuario'];
        $userPassword=$_POST['confimarContraseña'];
        
        $create=$_POST['insertar'];
      /*  $read=$_POST['seleccionar'];
        $update=$_POST['modificar'];
        $delete=$_POST['eliminar']; */
     
        print_r($_POST);
   
    /*
    // NUEVA INSTANCIA DE LA CLASE DATABASE
    $db = new Database();
    // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
    $con = $db->conectar();
    switch ($con = $db->conectar())
    {
        case "insertar"
            // NUEVA INSTANCIA DE LA CLASE DATABASE
            $db = new Database();
             // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
            $con = $db->conectar();
            // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
            $sql = $con->prepare("INSERT INTO usuario (documento_usuario,nombre_usuario,apellido_usuario,correo_usuario,telefono_usuario,rol,contraseña) VALUES ('$userDocument','$userName','$userSurname','$useremail','$userPhone','$userRol','$userPassword');");
            
            // EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
            $sql->execute();
            if($sql->execute())
            {

                header ('location: ../../public/rol/admin.php');
            }   
        case "eliminar"
            $sql = $con->prepare("DELETE FROM usuario WHERE usuario . id_usuario = 4");
    
        // EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
            $sql->execute();

        case "modificar"
            $sql = $con->prepare("UPDATE usuario SET documento_usuario = '9876543321', nombre_usuario = 'sergio', apellido_usuario = 'mendez', correo_usuario = 'sersrerers2@gmail.com' WHERE usuario . id_usuario = 3; ");
    
        // EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
            $sql->execute();

        case "modificar"
            $sql = $con->prepare("UPDATE usuario SET documento_usuario = '9876543321', nombre_usuario = 'sergio', apellido_usuario = 'mendez', correo_usuario = 'sersrerers2@gmail.com' WHERE usuario . id_usuario = 3; ");
    
        // EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
            $sql->execute();

             
    }*/

    




