<div class="modal fade" id="formCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../../src/functions/controlCliente.php" method="post">
                  Nombre cliente
                <input class="form-control" type="text" name="nombreCliente" aria-label="default input example"> 
                Apellido cliente
                <input class="form-control" type="text" name="apellidoCLiente" aria-label="default input example"> 
                  Documento cliente
                <input class="form-control" type="text" placeholder="ingrese su documento sin puntos ni comas, por favor" name="documentoCliente" aria-label="default input example"> 
                  Telefono cliente
                <input class="form-control" type="number" name="telefonoCliente" aria-label="default input example"> 
                <input type="hidden" name="creadoPor" value="1">
                <button type="button" class="btn btn-secondary ms-0 m-2" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-info m-2">Confirmar</button>
            </form>
      </div>
      <div class="modal-footer">
         </div>
    </div>
  </div>
</div>