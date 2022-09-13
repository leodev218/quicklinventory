<!-- CABECERA/ HEADER DE LA APP-->
<?php 
      include ("../templates/header.php");
      include ("../templates/menu.php");
      require '../../config/database.php';
      include ('../forms/formProducto.php');

      //MODAL DE BOOTSTRAP
      include ('../modal/buscarProducto.php');
      include ('../modal/eliminarProducto.php');
      ?>

<!-- CUERPO/ BODY DE LA APP-->
<div class="container-fluid principal">
    <div class="row">
        <div class="col-12 col-sm-2 col-md-2 col-xl-2" id="sidebar">

        <!-- MENU DE SECCION -->

          <div class="d-grid gap-2">
                        <!-- Button trigger modal -->
            <button type="button" class="btn mt-4 btn-dark" data-bs-toggle="modal" data-bs-target="#buscarProducto">
              Buscar producto
            </button>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#formProducto">
              Crear producto
            </button>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#eliminarProducto">
              Eliminar producto
            </button>
          </div>

        
          <hr>

        <!-- MENU ACORDION -->
        <?php  include '../templates/acordion.php';?>

        </div>
        <div class="col-12 col-sm-10 col-md-10 col-xl-10 bg-white" id="contenido">

          <div class="row">
             <div class="col-12 col-lg-8">
                <h3 class="mt-4 ms-4 fw-bold">PRODUCTOS</h3>  
                
             </div>
             <div class="col-12 col-lg-4">
                <?php include ("../templates/pags.php");?>
             </div>           
          </div>
          <!-- TABLA PARA IMPRIMIR PRODUCTOS -->
            <table class="table  table-hover mt-2 table-striped">
                 <tr>
                   <td class="col"><strong> Id producto</strong> </td>
                   <td class="col"><strong> Nombre producto</strong> </td>
                   <td class="col"><strong> Descripcion producto</strong> </td>
                   <td class="col"><strong> Valor producto</strong> </td>
                   <td class="col"><strong> Cantidad producto</strong> </td>
                   <td class="col"><strong> Creado por</strong> </td>
                 </tr>
                <?php 
                $db = new Database();
                // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
                $con = $db->conectar();
                // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
                $sql = $con->prepare("SELECT * FROM producto");
                // EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
                $sql->execute();
                // GUARDAMOS EL RESULTADO EN UNA NUEVA VARIABLE Y DEFINIMOS EL BUCLE CON 'foreach'
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC); foreach ($resultado as $row) {

                ?>
                    <tr>
                      <td class="col"><?php echo $row ['id_producto']; ?></td>
                      <td class="col"><?php echo $row ['nombre_producto']; ?></td>
                      <td class="col"><?php echo $row ['descripcion_producto']; ?></td>
                      <td class="col"><?php echo $row ['valor_producto']; ?></td>
                      <td class="col"><?php echo $row ['cantidad_producto']; ?></td>
                      <td class="col"><?php echo $row ['creado_por']; ?></td>
                    </tr>
                <?php  } ?>
             </table>

        </div>
    </div>
</div>

<!-- PIE/ FOOTER DE LA APP-->
<?php include ("../templates/footer.php")?>