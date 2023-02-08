@extends('layouts.default')
@section('content')
<div class="container">
      <div class="row">
          <div class="mb-2 d-flex">
            <div class="col-lg-5">
            <div class="card">
              <div class="card-header">Ficha dual</div>
              <div class="card-body">
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
          <div class="mb-3">
            <div class="px-4 py-5 my-5 text-center offset-md-4">
              <h1 class="display-7 fw-bold text-center">Evaluar</h1>
              <div class="col-lg-4 mx-auto p-5">
                <div class="d-grid gap-5 d-sm-flex justify-content-sm-center">
                  <a href="{{ route('evaluacionDiario', $alumno->id) }}" class="btn btn-primary btn-lg px-5 gap-5 m-2">Evaluar Diario</a>
                  <a href="{{ route('evaluacionFicha', $alumno->id) }}" class="btn btn-primary btn-lg px-5 gap-5 m-2">Evaluar Ficha</a>
                </div>
              </div>
            </div>
        </div>
       
      </div>
    </div>
  </div>
@stop