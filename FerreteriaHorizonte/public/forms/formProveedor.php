<div class="modal fade" id="formProveedor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear proveedor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../sections/asociados.php" method="post">
                  Nombre proveedor
                <input class="form-control" type="text" name="nombreProveedor" aria-label="default input example"> 
                Apellido proveedor
                <input class="form-control" type="text" name="apellidoProveedor" aria-label="default input example"> 
                  Documento proveedor
                <input class="form-control" type="text" placeholder="ingrese su documento sin puntos ni comas, por favor" name="documentoProveedor" aria-label="default input example"> 
                   Telefono proveedor
                <input class="form-control" type="number" name="telefonoProveedor" aria-label="default input example"> 
                 
                <button type="button" class="btn btn-secondary ms-0 m-2" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-info m-2">Confirmar</button>
            </form>
      </div>
      <div class="modal-footer">
         </div>
    </div>
  </div>
</div>