<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ url('panel') }}">Clinica Láser</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{ url('panel') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Inicio</span>
          </a>
        </li>
        @if(session()->get('Rol') == 1)
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
          <a class="nav-link" href="{{ url('usuarios') }}">
            <i class="fa fa-users"></i>
            <span class="nav-link-text">Usuarios</span>
          </a>
        </li>
        @endif
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Medicos">
          <a class="nav-link" href="{{ url('medicos') }}">
            <i class="fa fa-user-md"></i>
            <span class="nav-link-text">Medicos</span>
          </a>
        </li>
         <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pacientes">
          <a class="nav-link" href="{{ url('pacientes') }}">
            <i class="fa fa-wheelchair-alt"></i>
            <span class="nav-link-text">Pacientes</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Citas">
          <a class="nav-link" href="{{ url('citas') }}">
            <i class="fa fa-heartbeat"></i>
            <span class="nav-link-text">Citas</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="{{ url('logout') }}" class="nav-link">
            <i class="fa fa-fw fa-sign-out"></i>Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </nav>