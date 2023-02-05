@extends('layouts.default')
@section('content')
<div class="container">
      <div class="row">
          <div class="mb-2 d-flex">
            <div class="col-lg-5">
              <div class="resume-base bg-primary user-dashboard-info-box p-4">
                <div class="profile">
                  <div class="jobster-user-info">
                    <div class="profile-avatar align-items-center">
                      <img class="img-fluid" style="width: 200px; height: 200px;" src="./estudiante.jpg">
                    <div class="profile-avatar-info mt-3">
                      <h5 class="text-white">Perfil</h5>
                    </div>
                  </div>
                </div>
                <div class="about-candidate border-top">
                  <div class="candidate-info">
                    <h6 class="text-white">Apellidos,Nombre:</h6>
                    <p class="text-white">Marquinez Fernández, Ignacio</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white">Email del estudiante:</h6>
                    <p class="text-white">imarquinez@deusto.es</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white">Año académico:</h6>
                    <p class="text-white">2021-22</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white">Curso:</h6>
                    <p class="text-white">2º</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white">Empresa:</h6>
                    <p class="text-white">INGENIERIA DACO</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white">Tutor Univerisad:</h6>
                    <p class="text-white">López Urrutia, Juan</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white">Contacto Fac.univ:</h6>
                    <p class="text-white">jlopez@deusto.es</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white">Tutor Empresa:</h6>
                    <p class="text-white">Eguren, Ane</p>
                  </div>
                  <div class="candidate-info">
                    <h6 class="text-white">Contacto Fac.Empresa:</h6>
                    <p class="text-white">neguren@dacom.com</p>
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