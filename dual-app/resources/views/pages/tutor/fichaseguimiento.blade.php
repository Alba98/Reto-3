@extends('layouts.default')
@section('content')
<div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 148px;">
          <div class="text-center">
          <h1 class="display-4 text-dark">Ficha de seguimiento  <a href="{{ route('evaluacionFicha') }}" class="btn btn-primary fs-5 pull-right">Evaluar Ficha</a></h1>
            <p class="lead text-muted">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
          </div>
        </div>
</div>


<div class="card-body">
  <div class="table-responsive">
  <table class="table table-striped table-hover">
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
      @foreach ($fichaSeguimiento as $ficha)
      <tr>
          <td>{{ $ficha->nombre }}</td>
          <td>{{ $ficha->empresa }}</td>
          <td>{{ $ficha->curso }}</td>
          <td>{{ $ficha->grado }}</td>
          <td>{{ $ficha->email }}</td>
      </tr>
  @endforeach
    </tbody>
  </table>
</div>

<div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th><i class="bi bi-person"></i> Fecha</th>
            <th><i class="bi bi-building"></i> Asistentes</th>
            <th><i class="bi bi-justify-left"></i> Tipo de tutoria</th>
            <th><i class="bi bi-justify-left"></i> Objetivos de la tutoria</th>
            <th><i class="bi bi-justify-left"></i> Resumen</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>22/12/22</td>
            <td>Fire&Blood</td>
            <td>George</td>
            <td>George</td>
            <td>George</td>
          </tr>
          <tr>
            <td>22/12/22</td>
            <td>Fire&Blood</td>
            <td>George</td>
            <td>George</td>
            <td>George</td>
          </tr>
          <tr>
            <td>22/12/22</td>
            <td>Fire&Blood</td>
            <td>George</td>
            <td>George</td>
            <td>George</td>
          </tr>
          <tr>
        </tbody>
      </table>
    </div>
</div>
@stop