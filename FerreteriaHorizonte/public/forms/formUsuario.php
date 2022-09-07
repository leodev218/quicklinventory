<div class="modal fade" id="formUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="../rol/admin.php" method="post">
                  Nombre usuario
                <input class="form-control" type="text" name="nombreUsuario" aria-label="default input example"> 
                Apellido usuario
                <input class="form-control" type="text" name="apellidoUsuario" aria-label="default input example"> 
                  Documento usuario
                <input class="form-control" type="text" placeholder="ingrese su documento sin puntos ni comas, por favor" name="documentoUsuaio" aria-label="default input example"> 
                  Correo usuario
                <input class="form-control" type="email"  name="correoUsuario" aria-label="default input example"> 
                  Telefono usuario
                <input class="form-control" type="number" name="telefonoUsuario" aria-label="default input example"> 
                 Rol
                <input class="form-control" type="text" name="rolUsuario" aria-label="default input example"> 
                 Contraseña
                <input class="form-control" type="password" name="contraseñaUsuario" aria-label="default input example"> 
                  Confirmar contraseña
                <input class="form-control" type="password" name="conrrfimarContraseña" aria-label="default input example"> 
                
                <button type="button" class="btn btn-secondary ms-0 m-2" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-info m-2">Confirmar</button>
            </form>
      </div>
      <div class="modal-footer">
         </div>
    </div>
  </div>
</div>