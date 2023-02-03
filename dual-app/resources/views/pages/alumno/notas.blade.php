@extends('layouts.default')
@section('content')
  <div class="container mt-2">
    <h1 class="display-3 text-center mt-5">Notas</h1>
    <div class="padding mt-4">
        <div class="row container d-flex justify-content-center">
        <div class="col-lg-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-header">
                <span>Notas</span>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th><i class="bi bi-justify-left"></i> Curso</th>
                      <th><i class="bi bi-building"></i> Empresa</th>
                      <th><i class="bi bi-list-stars"></i> Nota Empresa</th>
                      <th><i class="bi bi-list-stars"></i> Nota Curso</th>
                      <th><i class="bi bi-calendar-check"></i> Nota final</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($calificaciones->where('id_ficha', $fichas->value('id')) as $calificacion)
                      <tr>
                        <td> {{ ($alumno->value('curso')) }} curso</td>
                        <td> {{ $empresas->where('id', $fichas->value('id_empresa'))->value('nombre') }} </td>
                        <td> {{ ($calificacion->calificacionTrabajo) }}</td>
                        <td> {{ ($calificacion->calificacionDiario) }}</td>
                        <td> {{ ($calificacion->id_ficha) + ($calificacion->id_ficha_seguimiento) / 2 }}</td>
                      </tr>
                    @endforeach
                    <tr>
                      <td>4º Curso</td>
                      <td>Mercedes-Benz</td>
                      <td>8</td>
                      <td>6</td>
                      <td>7</td>
                    </tr>
                    <tr>
                      <td>3º Curso</td>
                      <td>Mercedes-Benz</td>
                      <td>7</td>
                      <td>9</td>
                      <td>8</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer">
              <a href="{{ route('principal') }}" class="btn btn-primary">Volver</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop