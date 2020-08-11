<div id="modalEdit" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ACTUALIZAR  DATOS</h4>
        </div>
        <div class="modal-body">
        <form  method="POST" action="{{ route('status-document.update', 'statu') }}" id="form_edit">
          @csrf
          @method('PUT')
          <fieldset>         
            <input class='form-control'  type='hidden' name="id_status_document" id="id_status_document">
           
            <div class='form-group'>
              <label class='control-label'>Descripción</label>
              <input class='form-control'  type='text' name="description_e" id="description_e">
            </div>
            <div class='form-group'>
              <button class="btn btn-success" type="button" id="Actualizar"><i class="fa fa-save"></i> ACTUALIZAR</button>
            </div>     
             
          </fieldset>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">CERRAR</button>
        </div>
      </div>
  
    </div>
  </div>