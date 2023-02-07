@extends('layouts.default')
@section('content')
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
        <div class="col-lg-8 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-header">
                            <h1>Listado alumnos</h1>
                            <div class="input-group">
                                <input type="search" class="form-control rounded" placeholder="Busqueda por nombre" aria-label="Search" aria-describedby="search-addon" />
                                <button type="button" class="btn btn-primary">Buscar</button>
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
                                  <th><i class="bi bi-star-fill"></i> Calificación</th>
                                  <th><i class="bi bi-star-fill"></i> Evaluar</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($fichas as $ficha)
                                <tr>
                                  <td>{{ ($ficha->alumno->persona->nombre)  }}</td>
                                  <td>{{ ($ficha->empresa->nombre)  }}</td>
                                  <td>{{ ($ficha->curso)  }}</td>
                                  <td>{{ ($ficha->alumno->grado->nombre)  }}</td>
                                    @if($ficha->calificaciones)
                                      {{--$ficha->calificaciones--}}
                                      @php
                                        $nota_trabajo = 0; $nota_diario = 0;
                                        $suma = 0;
                                        $count = $ficha->calificaciones->evaluacionTrabajo->count();
                                      @endphp
                                      @foreach ($ficha->calificaciones->evaluacionTrabajo as $evTrabajo)
                                        {{--$evTrabajo->evaluacion->valoracion--}}
                                        @php
                                          $suma += $evTrabajo->evaluacion->valoracion;
                                        @endphp
                                      @endforeach
                                      @php
                                        if ($count > 0)
                                            $nota_diario = (floatval($suma)/floatval($count)); 
                                            $count = $ficha->calificaciones->evaluacionDiario->count();
                                            $suma = 0;
                                      @endphp
                                      @foreach ($ficha->calificaciones->evaluacionDiario as $evDiario)
                                        {{--$evDiario->evaluacion->valoracion--}}
                                        @php
                                          $suma += $evDiario->evaluacion->valoracion;
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
                                    @else
                                      <td> - </td>
                                    @endif
                                  <td><a href="{{ route('fichaAlumno', $ficha->alumno->id) }}" class="btn btn-primary">Ver</a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-primary">Ver más</button>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
@stop