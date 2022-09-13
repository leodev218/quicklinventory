<div class="modal fade" id="formProducto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
          <div class="modal-body">
            <form action="../../src/functions/controlProducto.php" method="post">
                  Nombre producto
                <input class="form-control" type="text" name="nombreProducto" aria-label="default input example"> 
                  Descripcion producto
                <input class="form-control" type="text" name="descripcionProducto" aria-label="default input example"> 
                  Precio producto
                <input class="form-control" type="number"  name="precioProducto" aria-label="default input example"> 
                  Cantidad producto
                  <input type="hidden" name="creadoPor" value="1">
                <input class="form-control" type="number" name="cantidadProducto" aria-label="default input example"> 
                <button type="button" class="btn btn-secondary ms-0 m-2" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-info m-2">Confirmar</button>
            </form>
          </div>
       <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>