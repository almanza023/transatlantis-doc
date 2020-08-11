<section id='sidebar'>
    <i class='icon-align-justify icon-large' id='toggle'></i>
    <ul id='dock' >
      <li class='launcher'>
        <i class='icon-dashboard'></i>
        <a href="{{ route('home') }}">Incio</a>
      </li>
      <li class=' launcher'>
        <i class='icon-file-text-alt'></i>
        <a href="{{ route('documents.index') }}">Documentos</a>
      </li>
      <li class=' launcher'>
       <i class="icon-user"></i>
        <a href="{{ route('contacts.index') }}">Contactos</a>
      </li>
      <li class='launcher'>
        <i class='icon-table'></i>
        <a href="tables.html">Gestion Documentos</a>
      </li>
      <br>
      <li class='launcher dropdown hover' >
       <i class="icon-share"></i>
        <a href='#' >Configuraciones <br> Generales</a>
        <ul class='dropdown-menu'>
          <li class='dropdown-header'>Opciones</li>
          <li>
            <a href="{{ route('dependences.index') }}">Dependencias</a>
          </li>
          <li>
            <a href='{{ route("type_documents.index") }}'>Tipo Documentos</a>
          </li>
          <li>
            <a href='{{ route("type-customers.index") }}'>Tipo de Clientes </a>
          </li>
          <li>
            <a href='{{ route("type-obtainments.index") }}'>Tipo de <br> Obtención </a>
          </li>
          <li>
            <a href='{{ route("status-document.index") }}'>Estado de <br> Documentos </a>
          </li>
          
          <li>
            <a href='{{ route("company.index") }}'>Empresa </a>
          </li>
        </ul>
      </li>
      <br>

      <li class='launcher dropdown hover'>
        <i class='icon-flag'></i>
        <a href='#'>Reportes</a>
        <ul class='dropdown-menu'>
          <li class='dropdown-header'>Launcher description</li>
          <li>
            <a href='#'>Action</a>
          </li>
          <li>
            <a href='#'>Another action</a>
          </li>
          <li>
            <a href='#'>Something else here</a>
          </li>
        </ul>
      </li>
     
      <li class='launcher'>
        <i class='icon-cloud'></i>
        <a href='#'>Backup</a>
      </li>
     
    </ul>
    
  </section>