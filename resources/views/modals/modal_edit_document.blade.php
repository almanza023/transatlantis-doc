<div id="modalEditDocument" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ACTUALIZAR  DATOS</h4>
        </div>
        <div class="modal-body">
        <form  method="POST" action="{{ route('documents.update', 'document') }}" id="form_edit">
          @csrf
          @method('PUT')
          <fieldset>         
            <input class='form-control'  type='hidden' name="id_document" id="id_document">            
            <div class='form-group'>
              <label class='control-label'>Nombre</label>
              <input class='form-control'  type='text' name="name_e" id="name_e">
            </div>
            <div class='form-group'>
              <label class='control-label'>Versión</label>
              <input class='form-control'  type='text' name="version_e" id="version_e">
            </div>
            <div class='form-group'>
              <label class='control-label'>Fecha</label>
              <input class='form-control'  type='date'  name="date_e" id="date_e">
            </div>
            <div class='form-group'>
              <label class='control-label'>Tipo Documento</label>
              <select name="id_type_document_e" id="id_type_document_e" class="form-control">
                <option value="0">Seleccione</option>
               @foreach ($type_documents as $item)
                   <option value="{{ $item->id_type_document }}">{{ $item->description }}</option>
               @endforeach
              </select>
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