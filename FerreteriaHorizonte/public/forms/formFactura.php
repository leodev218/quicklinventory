<div class="modal fade" id="formFactura" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear factura</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../../src/functions/controlFactura.php" method="post">
                  Fecha entrega
                <input class="form-control" type="date" name="fechaEntega" aria-label="default input example"> 
                  Fecha pago
                <input class="form-control" type="date" name="fechaPago" aria-label="default input example"> 
                  Numero orden
                <input class="form-control" type="text" placeholder="ingrese su documento sin puntos ni comas, por favor" name="numeroOrden" aria-label="default input example"> 
                 Tipo factura
                 <div class="row">
                  <input class="form-check-input ms-4" type="radio" name="tipoFactura" value="venta" aria-label="default input example"> 
                    <label class="form-check-input border-0" for="html">Venta</label><br>
                  <input class="form-check-input ms-4" type="radio" name="tipoFactura" value="compra" aria-label="default input example"> 
                    <label class="form-check-input border-0" for="html">Compra</label><br>
                  
                 </div>
                <input type="hidden" name="creadoPor" value="1">
                <button type="button" class="btn btn-secondary ms-0 mt-3" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-info ms-2 mt-3">Confirmar</button>
            </form>
      </div>
      <div class="modal-footer">
         </div>
    </div>
  </div>
</div>