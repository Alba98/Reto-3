@extends('layouts.default')
@section('content')

    <div class="container">
      <h2 class="text-muted"><i class="bi bi-signpost-fill"></i> Acciones rapidas</h2>
      <div class="row justify-content-md-center">
        <div class="col col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title ">Alumnos</h4>
              <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
              <a href="{{ route('alumnos') }}" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i>Alumnos</a>
            </div>
          </div>
        </div>
        @if (Auth::user()->tipo_usuario == 'tuniversidad')
        <div class="col col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Formulario de seguimiento</h4>
              <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
              <a href="{{ route('fichaSeguimineto') }}" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i> Formulario seguimiento</a>
            </div>
          </div>
        </div>
      </div>
      @endif
  </div>

  <!-- Notificaciones -->
  @include('pages.notificacion', $notificaciones)

@stop