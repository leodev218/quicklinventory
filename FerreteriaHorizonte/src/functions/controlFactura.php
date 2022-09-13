<?php
//print_r($_POST);
include_once("../../config/database.php");
include('../entities/Producto.php');


if($_POST['facturaVenta'])
{
    $deliveryDate=$_POST['fechaEntega'];
    $paymentDate=$_POST['fechaPago'];
    $orderNumber=$_POST['numeroOrden'];
    $type=$_POST['facturaVenta'];
    $createdBy=$_POST['creadoPor'];
    $db = new Database();
                // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
                $con = $db->conectar();
                // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
                $sql = $con->prepare("INSERT INTO factura (fecha_entrega,fecha_pago,
                                    numero_orden,f_cliente,f_proveedor) VALUES ('$deliveryDate',
                                    '$paymentDate','$orderNumber','$type',
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

}elseif($_POST['facturaCompra']){

    $deliveryDate=$_POST['fechaEntega'];
    $paymentDate=$_POST['fechaPago'];
    $orderNumber=$_POST['numeroOrden'];
    $type=$_POST['facturaCompra'];
    $createdBy=$_POST['creadoPor'];
    $db = new Database();
                // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
                $con = $db->conectar();
                // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
                $sql = $con->prepare("INSERT INTO factura (fecha_entrega,fecha_pago,
                                    numero_orden,f_cliente,f_proveedor) VALUES ('$deliveryDate',
                                    '$paymentDate','$orderNumber','$type',
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
}
    
    
    
    
    