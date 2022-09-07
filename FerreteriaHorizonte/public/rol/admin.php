<!-- CABECERA/ HEADER DE LA APP-->
<?php 
    include ("../templates/header.php");
    require '../../config/database.php';
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
                     <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#buscarUsuario">
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
             <a class="nav-link mt-2 link-dark" href="#"><strong>Cerrar sesion</strong></a>
           </li>
         </ul>
    </div>
  </div>
            
</div>
<div class="container-fluid principal">
    <div class="row">
        <!-- BARRA LATERAL IZQUIERDA-->
        <div class="col-12 col-sm-1 col-md-1 col-xl-1" id="sidebar">
    
    
      <!-- CONTENIDO PRINCIPAL -->      
        </div>
        <div class="col-12 col-sm-10 col-md-10 col-xl-10" id="contenido"> 
          
         
        <!-- CARTA DE PERFIL -->
           <div class="card text-center mt-2">
             <div class="card-header fw-bold">
                 Bienvenido admin
               </div>
               <div class="card-body m-0 p-0">
                  <div class="row">
                     <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                   
                      <h3>Indicadores</h3>
                
                     </div>
                     <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4"  >
                        <a href="#" class="btn btn-info m-4 text-white">Go somewhere</a>
                     </div>
                  </div>
            
              
                 
               </div>
               <div class="card-footer text-muted">
                 
               </div>
           </div>
        </div>
        <div class="col-12 col-sm-1 col-md-1 col-xl-1">

        </div>
    </div>
</div>


<!-- PIE/ FOOTER DE LA APP-->
<?php include ("../templates/footer.php")?>