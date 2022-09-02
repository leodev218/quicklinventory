<?php

namespace App;

class Cliente 
{
    public string $documentc;
    public string $namec;  
    public string $surnamec;
    public string $phonec;
  
  
    public function __construct($documentc,$namec,$surnamec,$phonec) {
      $this->documentc = $documentc;
      $this->namec = $namec;
      $this->surnamec = $surnamec;
      $this->phonec = $phonec;
      
    }
    public function get_documentc(){
        return $this ->documentc;
    }
    public function get_namec() {  
      return $this->namec;
    }
    public function get_surnamec() {
      return $this->surnamec;
    }
  
    public function get_phonec() {
      return $this->phonec;
    }
}
  

