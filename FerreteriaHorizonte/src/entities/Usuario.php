<?php

class Usuario 
{
    public string $documentu;
    public string $nameu;  
    public string $surnameu;
    public string $emailu;
    public int $rolu;
    public string $passwordu;
  
  
    public function __construct($documentu,$nameu,$surnameu,$emailu,$rolu,$passwordu) {
      $this->documentu = $documentu;
      $this->nameu = $nameu;
      $this->surnameu = $surnameu;
      $this->emailu = $emailu;
      $this->rolu = $rolu;
      $this->passwordu = $passwordu;
    }
    public function get_documentu(){
        return $this ->documentu;
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
  
    public function get_rolu() {
      return $this->rolu;
    }
    public function get_passwordu() {
      return $this->passwordu;
    }
  }
  

