<?php
//print_r($_POST);
include_once("../../config/database.php");
include('../entities/Producto.php');

    $providerName=$_POST['nombreProveedor'];
    $providerSurname=$_POST['apellidoProveedor'];
    $providerDocument=$_POST['documentoProveedor'];
    $providerPhone=$_POST['telefonoProveedor'];
    $createdBy=$_POST['creadoPor'];
    
    
    $db = new Database();
                // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
                $con = $db->conectar();
                // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
                $sql = $con->prepare("INSERT INTO proveedor (nombre_proveedor,apellido_proveedor,
                                    documento_proveedor,telefono_proveedor,creado_por) VALUES ('$providerName',
                                    '$providerSurname','$providerDocument','$providerPhone',
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
