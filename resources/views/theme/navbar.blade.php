<div class='navbar navbar-default' id='navbar'>
    <a class='navbar-brand' href='#'>
      <i class='icon-beer'></i>
      Gestión Documental Atlants
    </a>
    <ul class='nav navbar-nav pull-right'>
      <li class='dropdown'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
          <i class='icon-envelope'></i>
          Messages
          <span class='badge'>5</span>
          <b class='caret'></b>
        </a>
        <ul class='dropdown-menu'>
          <li>
            <a href='#'>New message</a>
          </li>
          <li>
            <a href='#'>Inbox</a>
          </li>
          <li>
            <a href='#'>Out box</a>
          </li>
          <li>
            <a href='#'>Trash</a>
          </li>
        </ul>
      </li>
      <li>
        <a href='#'>
          <i class='icon-cog'></i>
          Settings
        </a>
      </li>
      <li class='dropdown user'>
        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>
          <i class='icon-user'></i>
          <strong>
            @if (auth()->check())
                {{ auth()->user()->first_name. ' '.auth()->user()->last_name }}
            @endif

          </strong>
          <img class="img-rounded" src="http://placehold.it/20x20/ccc/777" />
          <b class='caret'></b>
        </a>
        <ul class='dropdown-menu'>
          <li>
            <a href='#'>Edit Profile</a>
          </li>
          <li class='divider'></li>
          <li>
            <a class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar Sesión</a>
          </li>
        </ul>
      </li>
    </ul>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
  </div>
