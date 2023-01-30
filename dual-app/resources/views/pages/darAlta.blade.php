@extends('layouts.default')
@section('content')
<body>
    <div class="container mt-2">
        <h2 class="text-muted"><i class="bi bi-bell-fill"></i> Dar de alta</h2>
        <div class="row mt-3a">
          <div class="col col-md-3">
            <div class="card  border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-justify-left"></i> GRADO</h4>
                <p class="card-text text-muted">Crea un nuevo grado para la Universidad de Deusto.</p>
                <a href="#" class="btn btn-primary fs-5">Crear empresa <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="card border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-person"></i> ALUMNO</h4>
                <p class="card-text text-muted">Inscribe un nuevo alumno para la Universidad de Deusto.</p>
                <a href="#" class="btn btn-primary fs-5">Crear alumno <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
          <div class="col col-md-3">
            <div class="card  border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-building"></i> EMPRESA</h4>
                <p class="card-text text-muted">Añade una nueva empresa para la formación dual.</p>
                <a href="#" class="btn btn-primary fs-5">Crear empresa <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="card border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-layers"></i> TUTOR EMPRESA</h4>
                <p class="card-text text-muted">Inscribe un nuevo tutor de empresa para la fomación dual.</p>
                <a href="#" class="btn btn-primary fs-5">Crear tutor empresa <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
          <div class="col col-md-3">
            <div class="card  border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-journal-bookmark"></i> TUTOR UNIVERSIDAD</h4>
                <p class="card-text text-muted">Inscribe un nuevo tutor de universidad para la Universidad de Deusto.</p>
                <a href="#" class="btn btn-primary fs-5">Crear tutor universidad <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
          <div class="col col-md-3">
            <div class="card border-3 border-primary">
              <div class="card-body">
                <h4 class="card-title"><i class="bi bi-person-circle"></i> COORDINADOR</h4>
                <p class="card-text text-muted">Añade un nuevo coordinador para la formación dual.</p>
                <a href="#" class="btn btn-primary fs-5">Crear coordinador <i class="bi bi-plus-circle"></i></a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!--
    <div class="col-md-12 col-lg-8 offset-lg-2 mt-4" style="text-align: center">
        <button class="btn btn-primary bg-primary bg-gradient border-0 fs-2" style="width: 45%;height: 200px" type="button">Empresa</button>
        <button class="btn btn-primary ms-4 bg-primary bg-gradient border-0 fs-2" style="width: 45%;height: 200px" type="button">Grado</button><br>
        <button class="btn btn-primary mt-3 bg-primary bg-gradient border-0 fs-2" style="width: 45%;height: 200px" type="button">Alumno</button>
        <button class="btn btn-primary ms-4 mt-3 bg-primary bg-gradient border-0 fs-2" style="width: 45%;height: 200px" type="button">Tutor Empresa</button><br>
        <button class="btn btn-primary mt-3 bg-primary bg-gradient border-0 fs-2" style="width: 45%;height: 200px" type="button">Tutor Universidad</button>
        <button class="btn btn-primary ms-4 mt-3 bg-primary bg-gradient fs-2" border-0 style="width: 45%;height: 200px" type="button">Coordinador</button>
    </div> -->

    
</body>
@stop