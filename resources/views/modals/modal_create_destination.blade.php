<div id="modalCreate" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">REGISTRO DE DATOS</h4>
      </div>
      <div class="modal-body">
      <form action="{{ route('destinations.store') }}" method="POST" id="form_create" >
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
            <label class='control-label'>Documento (*)</label>
            <input class='form-control'  type='text' name="nid" id="nid">
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
        <label class='control-label'>Tipo Cliente (*)</label>
       
        <select name="id_type_customer" id="id_type_customer" class="form-control">
          <option value="0">Seleccione</option>
          @foreach ($type_customers as $item)
              <option value="{{ $item->id_type_customer }}">{{ $item->description }}</option>
          @endforeach
        </select>
      </div>
      <div class='form-group'>
        <label class='control-label'>Titúlo (*)</label>
        <select name="id_title" id="id_title" class="form-control">
          <option value="0">Seleccione</option>
          @foreach ($titles as $item)
              <option value="{{ $item->id_title }}">{{ $item->name }}</option>
          @endforeach
        </select>
      </div>
      <div class='form-group'>
        <label class='control-label'>Departamento (*)</label>
        <select name="id_departament" id="id_departament" class="form-control">
          <option value="0">Seleccione</option>
          @foreach ($departaments as $item)
              <option value="{{ $item->id_departament }}">{{ $item->name }}</option>
          @endforeach
        </select>
      </div>
      <div class='form-group'>
        <label class='control-label'>Municipio (*)</label>
       
        <select name="id_municipality" id="id_municipality" class="form-control">
         
        </select>
        <div class='form-group'>
          <label class='control-label'>Descripción </label>
          <input class='form-control'  type='text' name="description" id="description">
        </div>
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