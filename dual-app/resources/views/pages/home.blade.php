@extends('layouts.default')
@section('content')
    <h1>Acciones rapidas</h1>

    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col col-md-5">
          <button class="btn btn-primary bg-primary bg-gradient border-0 fs-2 w-100 h-100" type="button">Empresa</button>
        </div>
        <div class="col col-md-5">
          <button class="btn btn-primary bg-primary bg-gradient border-0 fs-2 w-100 h-100" type="button">Grado</button>
        </div>
      </div>

      <div class="row justify-content-md-center mt-3">
          <div class="col col-md-5">
              <button class="btn btn-primary bg-primary bg-gradient border-0 fs-2 w-100 h-100" type="button">Alumno</button>
          </div>
          <div class="col col-md-5">
              <button class="btn btn-primary bg-primary bg-gradient border-0 fs-2 w-100 h-100" type="button">Tutor Empresa</button>
          </div>
      </div>

      <div class="row justify-content-md-center mt-3">
          <div class="col col-md-5">
              <button class="btn btn-primary bg-primary bg-gradient border-0 fs-2 w-100 h-100" type="button">Tutor Universidad</button>
          </div>
          <div class="col col-md-5">
              <button class="btn btn-primary bg-primary bg-gradient border-0 fs-2 w-100 h-100" type="button">Coordinador</button>
          </div>
      </div>
  </div>
    <div class="container mt-3">
      <h2>Card Image</h2>
      <p>Image at the top (card-img-top):</p>
      <div class="card" style="width:400px">
        <img class="card-img-top" src="../bootstrap4/img_avatar1.png" alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">John Doe</h4>
          <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
      </div>
      <br>
      
      <p>Image at the bottom (card-img-bottom):</p>
      <div class="card" style="width:400px">
        <div class="card-body">
          <h4 class="card-title">Jane Doe</h4>
          <p class="card-text">Some example text some example text. Jane Doe is an architect and engineer</p>
          <a href="#" class="btn btn-primary">See Profile</a>
        </div>
        <img class="card-img-bottom" src="../bootstrap4/img_avatar6.png" alt="Card image" style="width:100%">
      </div>
    </div>
@stop