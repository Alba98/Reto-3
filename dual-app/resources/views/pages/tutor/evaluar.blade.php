@extends('layouts.default')
@section('content')
<div class="container">
      <div class="row">
          <div class="mb-2 d-flex">
            <div class="col-lg-5">
              <div class="resume-base bg-primary user-dashboard-info-box p-4">
                <div class="profile">
                  <div class="jobster-user-info">
                    <div class="profile-avatar-info mt-3">
                      <h5 class="text-white">Perfil</h5>
                  </div>
                </div>
               
                <div class="about-candidate border-top">
                  <div class="candidate-info mt-2">
                    <h6 class="text-white"><b>Apellidos,Nombre:</b></h6>
                    <p class="text-white">{{$alumno->persona->ape1}} {{$alumno->persona->ape2}}, {{$alumno->persona->nombre}}</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white"><b>Email del estudiante:</b></h6>
                    <p class="text-white">{{($email)}}</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white"><b>Año académico:</b></h6>
                    <p class="text-white">{{$alumno->fichaDual->anio_academico}}</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white"><b>Curso:</b></h6>
                    <p class="text-white">{{$alumno->fichaDual->curso}}</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white"><b>Empresa:</b></h6>
                    <p class="text-white">{{$alumno->fichaDual->empresa->nombre}}</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white"><b>Tutor Univerisad:</b></h6>
                    <p class="text-white">{{$alumno->fichaDual->tuniversidad->docente->persona->nombre}}</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white"><b>Contacto Fac.univ:</b></h6>
                    <p class="text-white">{{$usuarios->where('id_persona',$alumno->fichaDual->tuniversidad->docente->persona->id)->value('email')}}</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white"><b>Tutor Empresa:</b></h6>
                    <p class="text-white">{{$alumno->fichaDual->tempresa->persona->nombre}}</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white"><b>Contacto Fac.Empresa:</b></h6>
                    <p class="text-white">{{$usuarios->where('id_persona',$alumno->fichaDual->tempresa->persona->id)->value('email')}}</p>
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
                  <button type="button" class="btn btn-primary btn-lg px-5 gap-5 m-2">Evaluar Diario</button>
                  <button type="button" class="btn btn-outline-secondary btn-lg px-5 m-2">Evaluar Ficha</button>
                </div>
              </div>
            </div>
        </div>
       
      </div>
    </div>
  </div>
@stop