@extends('layouts.default')
@section('content')

<div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 148px;">
          <div class="text-center">
            <h1 class="display-4 text-dark">Diario aprendizaje 
              @if (Auth::user()->tipo_usuario == 'tuniversidad') 
                <a href="{{ route('evaluacionDiario') }}" class="btn btn-primary fs-5 pull-right">Evaluar Diario</a>
              @endif
            </h1>
            <p class="lead text-muted">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
          </div>
        </div>
</div>


<div class="card-body">
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th><i class="bi bi-person"></i> Nombre</th>
          <th><i class="bi bi-building"></i> Empresa</th>
          <th><i class="bi bi-justify-left"></i> Curso</th>
          <th><i class="bi bi-justify-left"></i> Grado</th>
          <th><i class="bi bi-star-fill"></i> Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $alumno->persona->nombre }}</td>
          <td>{{ $alumno->fichaDual->empresa->nombre }}</td>
          <td>{{ $alumno->fichaDual->curso }}</td>
          <td>{{ $alumno->grado->nombre }}</td>
          <td>{{ $alumno->persona->usuario->email }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th><i class="bi bi-person"></i> Periodo</th>
            <th><i class="bi bi-building"></i> Actividades desarrolladas</th>
            <th><i class="bi bi-justify-left"></i> Reflexion y progreso</th>
            <th><i class="bi bi-justify-left"></i> Problemas o dificultades</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($diarios as $diario)
            <tr>
              <td>{{ ($diario->periodo) }}</td>
              <td>{{ ($diario->actividades) }}</td>
              <td>{{ ($diario->reflexion) }}</td>
              <td>{{ ($diario->problemas) }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

           
@stop