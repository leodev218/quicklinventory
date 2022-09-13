<?php
//print_r($_POST);
include_once("../../config/database.php");
include('../entities/Producto.php');

    $clientName=$_POST['nombreCliente'];
    $clientSurname=$_POST['apellidoCLiente'];
    $clientDocument=$_POST['documentoCliente'];
    $clientPhone=$_POST['telefonoCliente'];
    $createdBy=$_POST['creadoPor'];
    
    
    $db = new Database();
                // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
                $con = $db->conectar();
                // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
                $sql = $con->prepare("INSERT INTO cliente (nombre_cliente,
                                    apellido_cliente,documento_cliente,telefono_cliente,creado_por) VALUES ('$clientName',
                                    '$clientSurname','$clientDocument','$clientPhone',
                                    '$createdBy');");
                                    
            
                // EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
                $sql->execute();
                // GUARDAMOS EL RESULTADO EN UNA NUEVA VARIABLE Y DEFINIMOS EL BUCLE CON 'foreach'
    if($sql)
    {
         include ("../../public/templates/registro.php");
    }else{
        include ("../../public/templates/error.php");
    }
