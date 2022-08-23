<!-- CABECERA/ HEADER DE LA APP-->
<?php require '../../src/entities/class-producto.php'; ?>
<?php require '../../config/database.php';?>

<?php include ("../templates/header.php")?>

<!-- CUERPO/ BODY DE LA APP-->
<div class="container-fluid principal">
    <div class="row">
        <div class="col-12 col-sm-5 col-md-4 col-xl-4" id="sidebar">
         <!-- MENU DE ACORDION-->
                
          <div class="accordion" id="accordionExample">
            <div class="accordion-item mt-4">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Accordion Item #1
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Accordion Item #2
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Accordion Item #3
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                </div>
                </div>
            </div>
            </div> 
        
    </div>
        <div class="col-12 col-sm-7 col-md-8 col-xl-8 bg-white" id="contenido">



<!-- TABLA PARA IMPRIMIR PRODUCTOS -->
     
<table class="table  table-hover m-4 table-striped">
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
                  <td class="col"><?php echo $row ['id_poducto']; ?></td>
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