<?php include ("../templates/header.php");
      include("../templates/menu.php");
      require '../../config/database.php';
      include ('../modal/buscarProducto.php');
      include ('../forms/formProveedor.php');
      include ('../forms/formCliente.php');
      include ('../modal/buscarClientes.php');
      include ('../modal/eliminarClientes.php');
?>

<!-- CUERPO/ BODY DE LA APP-->

<div class="container-fluid principal">
    <div class="row">
      <div class="col-12 col-sm-3 col-md-2 col-xl-2" id="sidebar">
      
          <!-- MENU DE SECCION -->

          <div class="d-grid gap-2">

             <!-- Button trigger modal -->
             <button type="button" class="btn mt-4 btn-dark" data-bs-toggle="modal" data-bs-target="#buscarCliente">
             Consultar
            </button>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#formProveedor">
              Crear proveedor
            </button>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#formCliente">
              Crear cliente
            </button>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#eliminarCliente">
              Eliminar
            </button>

          
          </div>

        
          <hr>
         <!-- MENU ACORDION -->
         <?php  include '../templates/acordion.php';?>
        
    </div>
        <div class="col-12 col-sm-10 col-md-10 col-xl-10 bg-white" id="contenido">

        <div class="row">
             <div class="col-12 col-lg-8">
                <h3 class="mt-4 ms-4 fw-bold">ASOCIADOS</h3>  
                <?php print_r($_POST);?>
             </div>
             <div class="col-12 col-lg-4">
                <?php include ("../templates/pags.php");?>
             </div>           
          </div>


                <!-- TABLA PARA IMPRIMIR PRODUCTOS -->

            <table class="table  table-hover m-4 table-striped">
                 <tr>
                   <td class="col"><strong> Id orden</strong> </td>
                   <td class="col"><strong> Fecha creacion</strong> </td>
                   <td class="col"><strong> Fecha entrega</strong> </td>
                   <td class="col"><strong> Fecha pago</strong> </td>
                   <td class="col"><strong> Creada por</strong> </td>
                 </tr>
                <?php 
                $db = new Database();
                // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
                $con = $db->conectar();
                // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
                $sql = $con->prepare("SELECT * FROM orden");
                // EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
                $sql->execute();
                // GUARDAMOS EL RESULTADO EN UNA NUEVA VARIABLE Y DEFINIMOS EL BUCLE CON 'foreach'
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC); foreach ($resultado as $row) {

                ?>
                    <tr>
                      <td class="col"><?php echo $row ['id_orden']; ?></td>
                      <td class="col"><?php echo $row ['fecha_creacion']; ?></td>
                      <td class="col"><?php echo $row ['fecha_entrega']; ?></td>
                      <td class="col"><?php echo $row ['fecha_pago']; ?></td>
                      <td class="col"><?php echo $row ['creado_por']; ?></td>
                    </tr>
                <?php  } ?>
             </table>

        </div>
    </div>
</div>

<!-- PIE/ FOOTER DE LA APP-->
<?php include ("../templates/footer.php")?>