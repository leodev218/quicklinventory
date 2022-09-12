<div class="modal fade" id="buscarCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buscar cliente o proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../sections/factura.php" method="post">
         <input class="form-control" type="text" placeholder="Nombre o documento de proveedor o cliente" aria-label="default input example"> 
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" name="seleccionar" class="btn btn-primary m-2">Buscar</button>
        </form>
      </div>
      <div class="modal-footer">
      
      </div>
    </div>
  </div>
</div>