<?php

class Database
{
    private $host = "127.0.0.1";
    private $dbname = "fastfile";
    private $username = "root";
    private $password = "";
    private $charset = "utf8";
    

    public function conectar()
    {
        try 
        {
            
            $conexion = "mysql:host=" .$this -> host . ";dbname=" .$this -> dbname.";charset=" .$this -> charset;
            
            $option = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false
            ];
        
            $pdo = new PDO ($conexion,$this->username,$this->password,$option);
            
            $pdo->exec("set names utf8");
            return $pdo;
           

        } catch (PDOException $e) {
            echo "Error de conexion: " .$e->getMessage();
            exit;
        }
    }
}


