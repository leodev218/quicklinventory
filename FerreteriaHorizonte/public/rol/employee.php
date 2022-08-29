<!-- CABECERA/ HEADER DE LA APP-->
<?php 
include ("../templates/header.php");
session_start();
if(!isset($_SESSION['rol']))
{
    header('location: ../../index.php');
} else 
  {
    if($_SESSION['rol'] = !2)
    {
        header('location: ../../index.php');
    }   
  }


?>

<!-- CUERPO/ BODY DE LA APP-->


EMPLEADO
<!-- PIE/ FOOTER DE LA APP-->
<?php include ("../templates/footer.php")?>