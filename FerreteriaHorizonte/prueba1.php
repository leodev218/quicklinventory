<?php include ("public/templates/header.php"); ?>


<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Show a second modal and hide this one with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Hide this modal and show the first with the button below.
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
      </div>
    </div>
  </div>
</div>
<a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>


<?php print_r($_POST);
// pueba codigo iniciar varias sesiones de usuario

session_start();

  if(isset($_GET['cerrar_sesion']))
  {
    session_unset();
    session_destroy();
  }
  if(isset($_SESSION['rol']))
  {
    switch($_SESSION['rol'])
    {
      case 1:
        header('location:public/rol/admin.php');
        break;
      case 2:
        header('location:public/rol/employee.php');
        break;
        default;
    }
  }

  if(isset($_POST['floatingInput']) && isset($_POST['floatingPassword']))
  {
    $userEmail = $_POST['floatingInput'];
    $userPassword = $_POST['floatingPassword'];

    // NUEVA INSTANCIA DE LA CLASE DATABASE
$db = new Database();
// ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
$con = $db->conectar();
// DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
$sql = $con->prepare("SELECT correo_usuario,contraseña FROM usuario WHERE correo_usuario ='.$userEmail.' AND contraseña ='.$userPassword.';");
// EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
$sql->execute();

$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

    /* $db = new Database();
     *  $query = $db->conectar()->prepare('SELECT * FROM usuario WHERE correo_usuario ='.$userEmail.'AND contraseña ='.$userPassword);
     *  $query->execute(['correo_usuario' => $userEmail,'contraseña' => $userPassword]);
     */
    $row = $query ->fetch(PDO::FETCH_NUM);
    if($row == true)
    {
      $rol = $row[7];
      $_SESSION['rol'] = $rol;

      switch($_SESSION['rol'])
      {
        case 1:
          header('location:public/rol/admin.php');
        break;
        case 2:
          header('location:public/rol/employer.php');
          break;
          default;
      }
    } else 
    {
      echo 'El usuario o contraseña son incorrectos.';
    }
  }
?> 

<?php include ("public/templates/footer.php"); ?>


