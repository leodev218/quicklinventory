<?php
include_once 'Usuario.php';
class Admin extends Usuario
{
  function crearAdmin(){
    $admin = new Usuario(123456,'leo','dev','leleeoeo@fefeddd',1,'qwerty');
  }
    
}
