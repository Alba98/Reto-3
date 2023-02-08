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
                    <tr>
                      @if($ficha)
                        <td> {{ $ficha->curso }} curso</td>
                        <td> {{ $ficha->empresa->nombre }} </td>
                        @php
                          $nota_trabajo = 0; $nota_diario = 0;
                          $suma = 0;
                          $count = $ficha->calificaciones->evaluacionTrabajo->count();
                        @endphp
                        @if($ficha->calificaciones->evaluacionTrabajo)
                          @foreach ($ficha->calificaciones->evaluacionTrabajo as $trabajo)
                            @php
                              $suma += $trabajo->evaluacion->valoracion;
                            @endphp
                          @endforeach
                        @endif
                        @php
                          if ($count > 0)
                              $nota_trabajo = (floatval($suma)/floatval($count)); 
                          $count = $ficha->calificaciones->evaluacionDiario->count();
                          $suma = 0;
                        @endphp
                        @foreach ($ficha->calificaciones->evaluacionDiario as $diario)
                          @php
                            $suma += $diario->evaluacion->valoracion;
                          @endphp
                        @endforeach
                        @php
                          if ($count > 0)
                              $nota_diario = (floatval($suma)/floatval($count)); 
                        @endphp
                        @if ($ficha->calificaciones->evaluacionTrabajo == null || 
                            $ficha->calificaciones->evaluacionDiario == null)
                          <td>-</td>
                        @else
                          <td>{{round(($nota_trabajo + $nota_diario) / 2, 2)}}</td>
                        @endif
                        <td> {{ round($nota_trabajo, 2) }}</td>
                        <td> {{ round($nota_diario, 2) }}</td>
                        <td> {{ round(($nota_trabajo + $nota_diario) / 2, 2) }}</td>
                      @endif
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