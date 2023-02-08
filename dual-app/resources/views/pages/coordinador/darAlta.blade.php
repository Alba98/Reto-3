@extends('layouts.default')
@section('content')
<body>
    <div class="container mt-2">
        <h2 class="text-muted"><i class="bi bi-person-bounding-box"></i> Dar de alta</h2>
        <div class="row gap-3 p-3">
          <div class="col-5">
            <div class="card border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-justify-left"></i> GRADO</h4>
                <p class="card-text text-muted">Crea un nuevo grado para la Universidad de Deusto.</p>
                <a href="{{ route('registrarGrado') }}" class="btn btn-primary fs-5">Crear empresa <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
          <div class="col-5">
            <div class="card border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-person"></i> ALUMNO</h4>
                <p class="card-text text-muted">Inscribe un nuevo alumno para la Universidad de Deusto.</p>
                <a href="{{ route('registrarAlumno') }}" class="btn btn-primary fs-5">Crear alumno <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>

          <div class="col-5">
            <div class="card border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-building"></i> EMPRESA</h4>
                <p class="card-text text-muted">Añade una nueva empresa para la formación dual.</p>
                <a href="{{ route('registrarEmpresa') }}" class="btn btn-primary fs-5">Crear empresa <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
          <div class="col-5">
            <div class="card border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-layers"></i> TUTOR EMPRESA</h4>
                <p class="card-text text-muted">Inscribe un nuevo tutor de empresa para la fomación dual.</p>
                <a href="{{ route('registrarTutorEmpresa') }}" class="btn btn-primary fs-5">Crear tutor empresa <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>

          <div class="col-5">
            <div class="card border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-journal-bookmark"></i> TUTOR UNIVERSIDAD</h4>
                <p class="card-text text-muted">Inscribe un nuevo tutor de universidad para la Universidad de Deusto.</p>
                <a href="{{ route('registrarTutorUniversidad') }}" class="btn btn-primary fs-5">Crear tutor universidad <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
          <div class="col-5">
            <div class="card border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-person-circle"></i> COORDINADOR</h4>
                <p class="card-text text-muted">Añade un nuevo coordinador para la formación dual.</p>
                <a href="{{ route('registrarCoordinador') }}" class="btn btn-primary fs-5">Crear coordinador <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
    </div>
</body>
@stop