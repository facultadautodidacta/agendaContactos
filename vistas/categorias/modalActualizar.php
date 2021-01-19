<!-- Modal -->
<div class="modal fade" id="modalActualizarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar una categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmActualizarCategoria">
          <input type="text" name="idCategoria" id="idCategoria" hidden="">
          <label for="nombreCategoriaU">Nombre</label>
          <input type="text" id="nombreCategoriaU" name="nombreCategoriaU" class="form-control">
          <label for="descripcionU">Descripción</label>
          <textarea id="descripcionU" name="descripcionU" class="form-control"></textarea>
        </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning">Actualizar</button>
      </div>
    </div>
  </div>
</div>