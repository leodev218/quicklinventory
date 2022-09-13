<?php
//print_r($_POST);
include_once("../../config/database.php");
include('../entities/Producto.php');

    $creationDate=$_POST['fechaCreacion'];
    $deliveryDate=$_POST['fechaEntrega'];
    $paymentDate=$_POST['fechaPago'];
    $createdBy=$_POST['CreadoPor'];
    
    
    $db = new Database();
                // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
                $con = $db->conectar();
                // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
                $sql = $con->prepare("INSERT INTO orden (fecha_creacion,fecha_entrega,
                                    fecha_pago,creado_por) VALUES ('$creationDate',
                                    '$deliveryDate','$paymentDate',
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
