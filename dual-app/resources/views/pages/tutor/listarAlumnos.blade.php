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
                            <table class="table">
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
                                @foreach($alumnos as $alumno)
                                <tr>
                                  <td>{{($alumno->persona->nombre)}}</td>
                                  <td>{{($alumno->fichaDual->empresa->nombre)}}</td>
                                  <td>{{$alumno->curso}}</td>
                                  <td>{{$alumno->grado->nombre}}</td>
                                  @if ($evaluaciones->where('id_ficha',$ficha->where('id_alumno',$alumno->id)->value('id'))->value('valoracion') == null)
                                    <td>-</td>
                                  @else
                                    <td>{{$evaluaciones->where('id_ficha',$ficha->where('id_alumno',$alumno->id)->value('id'))->value('valoracion')}}</td>
                                  @endif
                                  <td><a href="{{ route('alumno.show',$alumno->id)}}" class="btn btn-primary">Ver</a></td>
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