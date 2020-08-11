<div id="modalEdit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">ACTUALIZACIÓN DE DATOS</h4>
      </div>
      <div class="modal-body">
      <form action="{{ route('contacts.update', 'contact') }}" method="POST" id="form_edit" >
        @method('PUT')

        @csrf
        <input class='form-control'  type='hidden' name="id_contact_person" id="id_contact_person">
        <fieldset>         
          <div class='form-group'>
            <label class='control-label'>Nombres (*)</label>
            <input class='form-control'  type='text' name="first_name_e" id="first_name_e">
          </div>
          <div class='form-group'>
            <label class='control-label'>Apellidos (*)</label>
            <input class='form-control'  type='text' name="last_name_e" id="last_name_e">
          </div>
       
        <div class='form-group'>
          <label class='control-label'>Teléfono (*)</label>
          <input class='form-control'  type='number' name="phone_e" id="phone_e">
        </div>
      
      <div class='form-group'>
        <label class='control-label'>Correo (*)</label>
        <input class='form-control'  type='email' name="email_e" id="email_e">
      </div>

      <div class='form-group'>
        <label class='control-label'>Dirección (*)</label>
        <input class='form-control'  type='email' name="address_e" id="address_e">
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