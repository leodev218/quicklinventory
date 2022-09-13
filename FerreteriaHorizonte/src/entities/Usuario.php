<?php

class Usuario 
{
    public string $userDocument;
    public string $nameu;  
    public string $surnameu;
    public string $emailu;
    public string $phoneu;
    public int $rolu;
    public string $passwordu;
  
  
    public function __construct($userDocument,$nameu,$surnameu,$emailu,$phoneu,$rolu,$passwordu) {
      $this->userDocument = $userDocument;
      $this->nameu = $nameu;
      $this->surnameu = $surnameu;
      $this->emailu = $emailu;
      $this->phoneu = $phoneu;
      $this->rolu = $rolu;
      $this->passwordu = $passwordu;
    }
    public function passwordHash(string $hash)
    {
      //USO DE  password_hash
      $hash = password_hash($this->passwordu, PASSWORD_DEFAULT);
      echo "contraseña encriptada con passwod_hash: ".$hash;
      echo "</br>";
      echo "</br>";
 
  
  /**  EL USO DE LA FUNCION PASSWORD VERIFY EN PHP
   *  esta funcion de PHP permite la vaildacion
   *  de los datos encriptados
   */
    if (password_verify($this->passwordu, $hash))
    {
      echo "password conrrecta";
    }
    echo "</br>";
    echo strlen($hash);
    echo "</br>";
    }
   
    public function get_documentu(){
        return $this ->userDocument; 
    }
  
    public function get_nameu() {  
      return $this->nameu;
    }
    public function get_surnameu() {
      return $this->surnameu;
    }
  
    public function get_emailu() {
      return $this->emailu;
    }
  
    public function get_phoneu() {
      return $this->phoneu;
    }
    public function get_rolu() {
      return $this->rolu;
    }
    public function get_passwordu() {
      return $this->passwordu;
    }
  }
  

