<?php

    session_start();
    if(isset($_POST['cerrarSesion']))
    {
        session_unset();
        session_destroy();
    }
    if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
            case 1: header('location: public/rol/admin.php');
            break;
            case 2: header('location: public/rol/admin.php');
            break;
            default;
        }
    }
    if (isset($_POST['correo_usuario']) && isset($_POST['contraseña']))
    {
        $userEmail = $_POST['correo'];
        $userPassword = $_POST['contraseña'];
        
        // NUEVA INSTANCIA DE LA CLASE DATABASE
        $db = new Database();
        // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
        $con = $db->conectar();
        // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
        $sql = $con->prepare("SELECT * FROM usuario WHERE correo_usuario = '$userEmail' AND contraseña = '$userPassword';");
        // EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
        $sql->execute(['correo_usuario' => $userEmail,'contraseña' => $userPassword]);
        $resultado = $sql->fetchAll(PDO::FETCH_NUM); 
        if($resultado == true)
        {
            $rol = $resultado[6];
            $_SESSION['rol'] = $rol;

            switch($_SESSION['rol']){
                case 1: header('location: ../../public/rol/admin.php');
                break;
                case 2: header('location: public/rol/admin.php');
                break;
                default;
            }
        }else{
            echo "El usuario o contraseña es incorrecto";
        }
    }






      
        
         
        
    
    
  
  
  

    
      
        
   





