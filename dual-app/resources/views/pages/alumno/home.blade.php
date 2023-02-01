@extends('layouts.default')
@section('content')
<!-- HOME DEL ALUMNO -->
    <div class="container">
      <h2 class="text-muted"><i class="bi bi-signpost-fill"></i> Acciones rapidas</h2>
      <div class="row justify-content-md-center">
        <div class="col col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title ">Acceder al diario</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="{{ route('diarioAprendizaje') }}" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i> Diario Aprendizaje</a>
            </div>
          </div>
        </div>
        <div class="col col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Ver mis notas</h4>
              <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
              <a href="{{ route('notas') }}" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i> Ver Notas</a>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Notificaciones -->
  @include('pages.notificacion', $notificaciones)
@stop