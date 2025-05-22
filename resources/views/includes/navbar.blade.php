<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Admin_sena</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropArea">
            Area
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropArea">
            <li><a class="dropdown-item" href="{{route('area.create')}}">crear</a></li>
            <li><a class="dropdown-item" href="{{route('area.index')}}">listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropComputer">
            Computer
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropComputer">
            <li><a class="dropdown-item" href="{{route('computer.create')}}">crear</a></li>
            <li><a class="dropdown-item" href="{{route('computer.index')}}">listar</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" id="dropTrainingC">
            Centro entrenamiento
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropTrainingC">
            <li><a class="dropdown-item" href="{{route('training_center.create')}}">crear</a></li>
            <li><a class="dropdown-item" href="{{route('trininig_center.index')}}">listar</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
