@extends('layouts.default')
@section('content')
<!-- HOME DEL ALUMNO -->
    <div class="container">
      <h2 class="text-muted"><i class="bi bi-signpost-fill"></i> Acciones rapidas</h2>
      <div class="row justify-content-md-center">
        <div class="col col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title ">Acceder al tus alumnos</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i> Alumnos</a>
            </div>
          </div>
        </div>
        <div class="col col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Formulasio seguimiento</h4>
              <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i> Formulasio seguimiento</a>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Notificaciones -->
  @include('pages.notificacion')

@stop