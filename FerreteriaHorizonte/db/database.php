<?php
// VALORES DE CONEXION A BASES DE DATOS
 $hostDB= "localhost";
 $userDB = "root";
 $passwordDB = "";
 $selesctDB = "fastfile";
 // FUNCTION PARA REALIZAR LA CONEXION A LA BASE DE DATOS
function conexion()
{
    $conexionBD = new PDO ($hostDB,$userDB,$passwordDB,$selesctDB);
    if ($conexionBD -> connect_errno);
    {
        echo "error de conexion mysql (".$conexionBD -> connect_errno.") ". $conexionBD -> connect_error;
    }
            else 
            {
                echo $conexionBD -> host_info."\n <strong>conexion establecida </strong>";
            }
}

    
?>