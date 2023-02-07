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
                              @foreach($fichas as $ficha)
                                  @if($ficha->Alumno && $ficha->curso)
                                      <tr>
                                          <th><i class="bi bi-person"></i> {{($ficha->alumno->nombre)}}</th>
                                          <th><i class="bi bi-building"></i> {{ ($ficha->empresa->nombre)}}</th>
                                          <th><i class="bi bi-justify-left"></i>{{ ($ficha->curso)}}</th>
                                          <th><i class="bi bi-justify-left"></i>{{ ($ficha->alumno->grado->nombre)}}</th>
                                          <th><i class="bi bi-star-fill"></i> {{$califiacion->evaluacion->valoracion}}  </th>
                                          <th><i class="bi bi-star-fill"></i> Evaluar</th>
                                      </tr>
                                  @endif
                              @endforeach

                              </thead>
                              <tbody>
                                @foreach($fichas as $ficha)
                                <tr>
                                  <td>{{ ($ficha->alumno->persona->nombre)  }}</td>
                                  <td>{{ ($ficha->empresa->nombre)  }}</td>
                                  <td>{{ ($ficha->curso)  }}</td>
                                  <td>{{ ($ficha->alumno->grado->nombre)  }}</td>
                                  @php
                                      $suma = 0;
                                  @endphp
                                  @foreach ($ficha->calificaciones as $califiacion)
                                    @php
                                      $suma+=$califiacion->evaluacion->valoracion;
                                    @endphp 
                                      {{ $califiacion->evaluacion->valoracion}}   
                                     
                                  @endforeach
                                  @php
                                    $count = $ficha->calificaciones->count();
                                    if ($count > 0) {
                                        $media = (floatval($suma)/floatval($count)); 
                                    }else{
                                        $media = 0; //Valor predeterminado        
                                    }
                                      
                                  @endphp
                                  <td>{{ ($media)  }}</td>
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