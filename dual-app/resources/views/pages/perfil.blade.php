@extends('layouts.default')
@section('content')
<div class="container bootstrap snippets bootdey">
    <h1 class="text-primary">Editar Perfil</h1>
      <hr>
    <div class="row">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="avatar img-circle img-thumbnail" alt="avatar">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3>Información personal</h3>
        
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nombre:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Nombre de usuario">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">1º Apellido:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="ape1">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">2º Apellido:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="ape2">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="Correo electronico">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Telefono:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="666666666">
            </div>
          </div>
           <input type="submit" class="btn btn-primary mt-2 mb-2" value="Guardar cambios">
        </form>
      </div>
  </div>
</div>
<hr>
@stop