<?php
//print_r($_POST);
include_once("../../config/database.php");
include('../entities/Producto.php');

    $productName=$_POST['nombreProducto'];
    $productDescription=$_POST['descripcionProducto'];
    $productPrice=$_POST['precioProducto'];
    $productStock=$_POST['cantidadProducto'];
    $createdBy=$_POST['creadoPor'];
    
    
    $db = new Database();
                // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
                $con = $db->conectar();
                // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
                $sql = $con->prepare("INSERT INTO producto (nombre_producto,descripcion_producto,
                                    valor_producto,cantidad_producto,creado_por) VALUES ('$productName',
                                    '$productDescription','$productPrice','$productStock',
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
