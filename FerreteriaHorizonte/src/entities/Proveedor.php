<?php

class Proveedor
 {
    public string $documentpr;
    public string $namepr;  
    public string $surnamepr;
    public string $phonepr;
  
  
    public function __construct($documentpr,$namepr,$surnamepr,$phonepr) {
      $this->documentpr = $documentpr;
      $this->namepr = $namepr;
      $this->surnamepr = $surnamepr;
      $this->phonepr = $phonepr;
      
    }
    public function get_documentpr(){
        return $this ->documentpr;
    }
    public function get_namepr() {  
      return $this->namepr;
    }
    public function get_surnamepr() {
      return $this->surnamepr;
    }
  
    public function get_phonepr() {
      return $this->phonepr;
    }
  
  }
  

?>