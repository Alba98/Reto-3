@extends('layouts.default')
@section('content')
<body>
    <div class="container mt-2">
        <h1 class="display-3 text-center mt-3">Registros anteriores</h1>
        <div class="row mt-4 justify-content-md-center">
            <div class="col col-md-5">
                <div class="card border-3 border-primary p-3">
                  <div class="card-body">
                    <h4 class="card-title"><i class="bi bi-journal-bookmark"></i> TUTOR UNIVERSIDAD</h4>
                    <p class="card-text text-muted">Visualiza el historial y los datos personales de los tutores de la Universidad de Deusto.</p>
                    <a href="{{ route('registrosTutorUniversidad') }}" class="btn btn-primary fs-5">Ver datos tutores universidad <i class="bi bi-plus-circle"></i></a>
                  </div>
                </div>
              </div>
          <div class="col col-md-5">
            <div class="card border-3 border-primary p-3">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-person"></i> ALUMNO</h4>
                <p class="card-text text-muted">Visualiza el historial académico de los alumnos de la Universidad de Deusto. Podrás observar las notas de años anteriores.</p>
                <a href="{{ route('registrosAlumno') }}" class="btn btn-primary fs-5">Ver datos alumnos <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row justify-content-md-center">
          <div class="col col-md-5">
            <div class="card  border-3 border-primary p-3">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-building"></i> EMPRESA</h4>
                <p class="card-text text-muted">Visualiza las empresas que componen el grado dual de la Universidad de Deusto.</p>
                <a href="{{ route('registrosEmpresa') }}" class="btn btn-primary fs-5">Ver empresas <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
          <div class="col col-md-5">
            <div class="card border-3 border-primary p-3">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-person-circle"></i> COORDINADOR</h4>
                <p class="card-text text-muted">Visualiza los datos de los coordinadores que pertenecen a la formación dual de Deusto.</p>
                <a href="{{ route('registrosCoordinador') }}" class="btn btn-primary fs-5">Ver coordinadores <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
          
          
        </div>
    </div>
</body>
@stop