<!-- CABECERA/ HEADER DE LA APP-->
<?php 
      require '../../config/database.php';
      include ("../templates/header.php");
      include("../templates/menu.php");
      include ('../modal/buscarProducto.php');
      ?>

<!-- CUERPO/ BODY DE LA APP-->
<div class="container-fluid principal">
    <div class="row">
        <div class="col-12 col-sm-2 col-md-2 col-xl-2" id="sidebar">

        <!-- MENU DE SECCION -->

          <div class="d-grid gap-2">

                           <!-- Button trigger modal -->
            <button type="button" class="btn mt-4 btn-dark" data-bs-toggle="modal" data-bs-target="#modalProducto">
              Buscar factura
            </button>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalProducto">
              Crear factura
            </button>
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#modalProducto">
              Eliminar factura
            </button>

          
          </div>

        
          <hr>

        <!-- MENU ACORDION -->
        <?php  include '../templates/acordion.php';?>

        </div>
        <div class="col-12 col-sm-10 col-md-10 col-xl-10 bg-white" id="contenido">



                <!-- TABLA PARA IMPRIMIR PRODUCTOS -->

            <table class="table  table-hover m-4 table-striped">
                 <tr>
                   <td class="col"><strong> Id factura</strong> </td>
                   <td class="col"><strong> Fecha entrega</strong> </td>
                   <td class="col"><strong> Fecha pago</strong> </td>
                   <td class="col"><strong> Numero orden</strong> </td>
                   <td class="col"><strong> Documento cliente</strong> </td>
                   <td class="col"><strong> Creado por</strong> </td>
                 </tr>
                <?php 
                $db = new Database();
                // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
                $con = $db->conectar();
                // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
                $sql = $con->prepare("SELECT * FROM factura");
                // EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
                $sql->execute();
                // GUARDAMOS EL RESULTADO EN UNA NUEVA VARIABLE Y DEFINIMOS EL BUCLE CON 'foreach'
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC); foreach ($resultado as $row) {

                ?>
                    <tr>
                      <td class="col"><?php echo $row ['id_factura']; ?></td>
                      <td class="col"><?php echo $row ['fecha_entrega']; ?></td>
                      <td class="col"><?php echo $row ['fecha_pago']; ?></td>
                      <td class="col"><?php echo $row ['numero_orden']; ?></td>
                      <td class="col"><?php echo $row ['f_cliente']; ?></td>
                      <td class="col"><?php echo $row ['f_proveedor']; ?></td>
                    </tr>
                <?php  } ?>
             </table>

        </div>
    </div>
</div>

<!-- PIE/ FOOTER DE LA APP-->
<?php include ("../templates/footer.php")?>