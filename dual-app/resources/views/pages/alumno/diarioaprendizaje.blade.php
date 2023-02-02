@extends('layouts.default')
@section('content')
<div class="container mt-2">
    <h1 class="display-3 text-center mt-5">Diario aprendizaje</h1>
    <div class="padding mt-4">
        <div class="row container d-flex justify-content-center">
        <div class="col-lg-8 grid-margin stretch-card">
                      <div class="card">
                      {{$diarios}}
                        <div class="card-header">
                            <span>Registros diario aprendizaje</span>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th><i class="bi bi-calendar-check"></i> Periodo</th>
                                  <th><i class="bi bi-globe"></i> Actividades desarrolladas</th>
                                  <th><i class="bi bi-graph-up"></i> Reflexión y progreso</th>
                                  <th><i class="bi bi-list-ul"></i> Problemas o dificultades</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($diarios as $diario)
                                <tr>
                                    <td>{{ ($diario->periodo) }}</td>
                                    <td>{{ ($diario->actividades) }}</td>
                                    <td>{{ ($diario->reflexion) }}</td>
                                    <td>{{ ($diario->problemas) }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                  <td>31/02/2022</td>
                                  <td>Muchas</td>
                                  <td>Todo OK</td>
                                  <td>Ninguno, soy muy bueno</td>
                                </tr>
                                <tr>
                                  <td>12/03/2022</td>
                                  <td>...</td>
                                  <td>-</td>
                                  <td>6</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('nuevaEntradaDiario') }}" class="btn btn-primary">Nueva entrada</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
</div>
@stop