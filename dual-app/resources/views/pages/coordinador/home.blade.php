@extends('layouts.default')
@section('content')
<!-- HOME DEL COORDINADOR -->
    <div class="container">
      <h2 class="text-muted"><i class="bi bi-signpost-fill"></i> Acciones rapidas</h2>
      <div class="row justify-content-md-center">
        <div class="col col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title ">Acceder como <b>Coordinador</b></h4>
              <p class="card-text">Ponte modo coordinador para poder dar de alta todo tipo de usuarios, acceder a los registros anteriores y la capacidad de asignar dual al alumnado.</p>
              <a href="#" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i> Coordinador</a>
            </div>
          </div>
        </div>
        <div class="col col-md-6">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Acceder como <b>Tutor</b></h4>
              <p class="card-text">Ponte modo tutor para tener los privilegios del mismo, así como todas las posibles opciones de evaluar a tus alumnos, el diario de aprendizaje y seguir la ficha de seguimiento.</p>
              <a href="#" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i> Tutor</a>
            </div>
          </div>
        </div>
      </div>
  </div>

  <!-- Notificaciones -->
  <div class="container mt-4">
    <h2 class="text-muted"><i class="bi bi-bell-fill"></i> Notificaciones</h2>
    <div class="row">
      <div class="col col-md-3">
        <div class="card  border-3 border-primary">
          <div class="card-body">
            <h4 class="card-title">Rellene el diario de aprendizaje</h4>
            <p class="card-text text-muted">30/01/2023</p>
            <a href="#" class="btn btn-primary fs-5">Visto <i class="bi bi-patch-check-fill"></i></a>
          </div>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="card border-3 border-primary">
          <div class="card-body">
            <h4 class="card-title">Tiene una reunión la semana que viene</h4>
            <p class="card-text text-muted">06/02/2023</p>
            <a href="#" class="btn btn-primary fs-5">Visto <i class="bi bi-patch-check-fill"></i></a>
          </div>
        </div>
      </div>
      <div class="col col-md-3">
        <div class="card  border-3 border-primary">
          <div class="card-body">
            <h4 class="card-title ">Ya estan las notas puestas, ve a revisarlas</h4>
            <p class="card-text text-muted">23/03/2023</p>
            <a href="#" class="btn btn-primary fs-5">Visto <i class="bi bi-patch-check-fill"></i></a>
          </div>
        </div>
      </div>
    </div>
</div>
@stop