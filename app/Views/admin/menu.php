<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item dropdown" align="center">
          <ion-icon name="medal-outline"></ion-icon><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mascotas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/admin/agregarMascota')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/admin/mostrarMascota');?>">Mostrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role-="button" data-bs-toggle="dropdown" aria-expanded="false">
            Adoptantes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/admin/agregarAdoptador')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/admin/mostrarAdoptador');?>">Mostrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dietas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/admin/agregarDieta')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/admin/mostrarDieta');?>">Mostrar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Razas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=base_url('index.php/admin/agregarRaza')?>">Agregar</a></li>
            <li><a class="dropdown-item" href="<?=base_url('index.php/admin/mostrarRaza');?>">Mostrar</a></li>
          </ul>
        </li>
      </ul>
      <a class="nav-link" href="http://localhost:8080/">Regresar</a>
    </div>
  </div>
</nav>
