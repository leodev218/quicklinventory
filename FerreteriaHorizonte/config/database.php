<?php

class Database
{
    private $host = "127.0.0.1";
    private $dbname = "fastfile";
    private $username = "root";
    private $password = "";
    private $charset = "utf8";

    function conectar () 
    {
        try 
        {
            $conexion = "mysql:host=" .$this -> host . ";dbname=" .$this -> dbname.";charset=" .$this -> charset;
            
            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
        
            $pdo = new PDO ($conexion,$this->username,$this->password,$option);
            return $pdo;

        } catch (PDOException $e) {
            echo "Error de conexion: " .$e->getMessage();
            exit;
        }
    }


}

// NUEVA INSTANCIA DE LA CLASE DATABASE
$db = new Database();
// ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
$con = $db->conectar();
// DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
$sql = $con->prepare("SELECT * FROM usuario");
// EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
$sql->execute();

$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);


?>