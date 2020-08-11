<div id="modalEdit" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">ACTUALIZAR  DATOS</h4>
        </div>
        <div class="modal-body">
        <form  method="POST" action="{{ route('company.update', 'type') }}" id="form_edit">
          @csrf
          @method('PUT')
          <fieldset>         
            <input class='form-control'  type='hidden' name="id_company" id="id_company">            
            <div class='form-group'>
              <label class='control-label'>Nombre</label>
              <input class='form-control'  type='text' name="name" id="name">
            </div>
            <div class='form-group'>
              <label class='control-label'>Nit</label>
              <input class='form-control'  type='text' name="nit" id="nit">
            </div>
            <div class='form-group'>
              <label class='control-label'>Dirección</label>
              <input class='form-control'  type='text' name="address" id="address">
            </div>
            <div class='form-group'>
              <label class='control-label'>Télefono</label>
              <input class='form-control'  type='number' name="phone" id="phone" >
            </div>
            <div class='form-group'>
              <label class='control-label'>Correo</label>
              <input class='form-control'  type='email' name="email" id="email" required >
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