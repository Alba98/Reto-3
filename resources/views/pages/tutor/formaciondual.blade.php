@extends('layouts.default')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-6">   
      <div class="card">
                <div class="card-header">Ficha dual</div>
                <div class="card-body">
                  <!-- Se muestra información correspondiente al alumno seleccionado -->
                  <h5 class="card-title">{{($alumno->persona->nombre)}}</h5>
                  <div class="about-candidate border-top">
                    <div class="candidate-info mt-2">
                      <h6><b>Apellidos,Nombre:</b></h6>
                      <p>{{ $alumno->persona->ape1 }} {{ $alumno->persona->ape2 }}, {{ $alumno->persona->nombre }}</p>
                    </div>
                    <div class="candidate-info">
                      <h6><b>Email del estudiante:</b></h6>
                      <p>{{ $alumno->persona->usuario->email }}</p>
                    </div>
                    <div class="candidate-info">
                      <h6><b>Año académico:</b></h6>
                      <p>{{ $alumno->fichaDual->anio_academico }}</p>
                    </div>
                    <div class="candidate-info">
                      <h6><b>Curso:</b></h6>
                      <p>{{ $alumno->fichaDual->curso }}</p>
                    </div>
                    <div class="candidate-info">
                      <h6><b>Empresa:</b></h6>
                      <p>{{ $alumno->fichaDual->empresa->nombre }}</p>
                    </div>
                    <div class="candidate-info">
                      <h6><b>Tutor Univerisad:</b></h6>
                      <p>{{ $alumno->fichaDual->tuniversidad->docente->persona->nombre }}</p>
                    </div>
                    <div class="candidate-info">
                      <h6><b>Contacto Fac.univ:</b></h6>
                      <p>{{ $alumno->fichaDual->tuniversidad->docente->persona->usuario->email }}</p>
                    </div>
                    <div class="candidate-info">
                      <h6><b>Tutor Empresa:</b></h6>
                      <p>{{ $alumno->fichaDual->tempresa->docente->persona->nombre }}</p>
                    </div>
                    <div class="candidate-info">
                      <h6><b>Contacto Fac.Empresa:</b></h6>
                      <p>{{ $alumno->fichaDual->tempresa->docente->persona->usuario->email }}</p>
                    </div>
                  </div>
                  </div>
                </div>
      </div>
      <div class="card col-sm-6 ">
              <div class="card-header">Acciones rapidas</div>
              <div class="card-body">
                  <p class="card-text">Abrir el diario de aprendizaje con todas las entradas del alumno </p>
                  <a href="{{ route('diarioAlumno', $alumno->persona->id) }}" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i>Ver Diario Aprendizaje</a>
                </div>
                <div class="card-body">        
                  <p class="card-text"> Abrir la ficha de segimiento con todas reuniones entre los tutores y el alumno </p>
                  <a href="{{ route('fichaSeguimiento', $alumno->persona->id) }}" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i>Ficha de seguimiento</a>
                </div>
                @if (Auth::user()->tipo_usuario == 'tuniversidad')
                  <div class="card-body">
                    <p class="card-text">Evaluar las parcticas duales</p>
                    <a href="{{ route('evaluar', $alumno) }}" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i>Evaluacion trabajo en empresa </a>
                  </div>
                @endif
      </div>
  </div>
</div>
@stop
