<!-- CABECERA/ HEADER DE LA APP-->
<?php 
    include ("../templates/header.php");
    require '../../config/database.php';
    require '../../src/entities/Usuario.php';
    include ('../forms/formUsuario.php');
    include ('../modal/eliminarUsuario.php');
    include ('../modal/buscarUsuario.php');
   
 /*session_start();
if(!isset($_SESSION['rol']))
{
    header('location: ../../index.php');
} else 
  {
    if($_SESSION['rol'] = !1)
    {
        header('location: ../../index.php');
    }   
  }
*/

?> 

<!-- CUERPO/ BODY DE LA APP-->
<div class="card-header">
  <div class="row bg-secondary bg-gradient bg-opacity-25">
    <div class="col-12 col-sm-6 col-md-8 col-lg-8">
        
        <ul class="nav nav-pills card-header-pills">
              <button class="btn btn-dark ms-1 mt-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Administrador</button>

            <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title fs-3" id="offcanvasWithBothOptionsLabel">Opciones de administrador</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <!-- CUERPO BARRA ADMINISTRADOR-->
              <div class="offcanvas-body ">
                <div class="d-grid gap-2">
                     <button type="button" class="btn btn-dark" action="buscaru" data-bs-toggle="modal" data-bs-target="#buscarUsuario">
                     Buscar usuario
                     </button>

                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#formUsuario">
                    Crear usuario
                    </button> 

                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#buscarUsuario">
                    Modificar usuario
                    </button>

                     <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#eliminarUsuario">
                     Eliminar usuario
                     </button>                                                                    
                </div>
               
              </div>
            </div>     
        </ul>
    </div>
    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
         <ul class="nav nav-pills card-header-pills">
           <li class="nav-item">
              <form action="../../src/functions/controlUsuario.php" method="post">
              <input type="hidden" name="cerrarSesion" value="Cerrar sesion">
              <input class="btn m-1" type="submit" value="Cerrar sesion">  
              </form>
           </li>
         </ul>
    </div>
  </div>
            
</div>
<div class="container-fluid principal">
    <div class="row">
   
        <div class="col-12" id="contenido"> 
          
          <!-- CARTA DE PERFIL -->
        
          <div class="card text-center mt-2">
             <div class="card-header fw-bold">
                 Bienvenido admin
               </div>
               <div class="card-body m-0 p-0">
                  <div class="row">
                     <div class="col-12">
                   
                      <h3>Indicadores</h3>
                      <hr>
                      <div class="row">
             <div class="col-12 col-lg-8">
                <h3 class="mt-4 ms-4 fw-bold">USUARIOS</h3>  
                <?php print_r($_POST);?>
             </div>
             <div class="col-12 col-lg-4">
                <?php include ("../templates/pags.php");?>
             </div>           
          </div>

                       <!-- TABLA PARA IMPRIMIR PRODUCTOS -->
            <table class="table  table-hover m-0 p-2  table-striped">
                 <tr>
                   <td class="col"><strong> Id usuario</strong> </td>
                   <td class="col"><strong> Nombre usuario</strong> </td>
                   <td class="col"><strong> Apellido Usuario</strong> </td>
                   <td class="col"><strong> Documento usuario</strong> </td>
                   <td class="col"><strong> Correo usuario</strong> </td>
                   <td class="col"><strong> Telefono usuario</strong> </td>
                   <td class="col"><strong> Rol</strong> </td>
                 </tr>
                <?php 
                $db = new Database();
                // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
                $con = $db->conectar();
                // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
                $sql = $con->prepare("SELECT * FROM usuario");
                // EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
                $sql->execute();
                // GUARDAMOS EL RESULTADO EN UNA NUEVA VARIABLE Y DEFINIMOS EL BUCLE CON 'foreach'
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC); foreach ($resultado as $row) {

                ?>
                    <tr>
                      <td class="col"><?php echo $row ['id_usuario']; ?></td>
                      <td class="col"><?php echo $row ['nombre_usuario']; ?></td>
                      <td class="col"><?php echo $row ['apellido_usuario']; ?></td>
                      <td class="col"><?php echo $row ['documento_usuario']; ?></td>
                      <td class="col"><?php echo $row ['correo_usuario']; ?></td>
                      <td class="col"><?php echo $row ['telefono_usuario']; ?></td>
                      <td class="col"><?php echo $row ['rol']; ?></td>
                    </tr>
                <?php  } ?>
             </table> 
          </div>     
        </div>
    </div>
</div>

  
</div>

<!-- PIE/ FOOTER DE LA APP-->
<?php include ("../templates/footer.php")?>