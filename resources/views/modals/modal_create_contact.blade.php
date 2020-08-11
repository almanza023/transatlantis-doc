<div id="modalCreate" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">REGISTRO DE DATOS</h4>
      </div>
      <div class="modal-body">
      <form action="{{ route('contacts.store') }}" method="POST" id="form_create" >
        @csrf
        <fieldset>         
          <div class='form-group'>
            <label class='control-label'>Nombres (*)</label>
            <input class='form-control'  type='text' name="first_name" id="first_name">
          </div>
          <div class='form-group'>
            <label class='control-label'>Apellidos (*)</label>
            <input class='form-control'  type='text' name="last_name" id="last_name">
          </div>
      
        <div class='form-group'>
          <label class='control-label'>Teléfono (*)</label>
          <input class='form-control'  type='number' name="phone" id="phone">
        </div>
      
      <div class='form-group'>
        <label class='control-label'>Correo (*)</label>
        <input class='form-control'  type='email' name="email" id="email">
      </div>
      <div class='form-group'>
        <label class='control-label'>Dirección (*)</label>
        <input class='form-control'  type='email' name="address" id="address">
      </div>
          <div class='form-group'>
            <button class="btn btn-success" type="button" id="Guardar"><i class="fa fa-save"></i> GUARDAR</button>
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