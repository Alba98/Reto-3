@extends('layouts.default')
@section('content')
<div class="container mt-2">
    <h1 class="display-3 text-center mt-5">Registros anteriores @if (!Auth::user()->tipo_usuario == 'alumno') alumnos @endif</h1>
    <div class="padding mt-4">
        <div class="row container d-flex justify-content-center">
        <div class="col-lg-8 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-header">
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
                                  @if (Auth::user()->tipo_usuario == 'coordinador')
                                    <th><i class="bi bi-trash"></i> Eliminar</th>
                                  @elseif (Auth::user()->tipo_usuario == 'tempresa' || Auth::user()->tipo_usuario == 'tuniversidad')
                                    <th><i class="bi bi-eye"></i> Ver</th>
                                  @endif
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($alumnos as $alumno)
                                <tr>
                                  <td>{{$alumno->persona->nombre}}</td>
                                  <td>{{$empresas->where('id',$alumno->fichaDual->value('id_empresa'))->value('nombre')}}</td>
                                  <td>{{$alumno->curso}}</td>
                                  <td>{{$alumno->grado->nombre}}</td>
                                  <td>{{$evaluaciones->where('id_ficha',$ficha->where('id_alumno',$alumno->id)->value('id'))->value('valoracion')}}</td>
                                  @if (Auth::user()->tipo_usuario == 'coordinador')
                                    <td><a href="?id={{$alumno->id_persona}}" class="btn btn-danger">Eliminar</a></td>
                                  @elseif (Auth::user()->tipo_usuario == 'tempresa' || Auth::user()->tipo_usuario == 'tuniversidad')
                                    <td><a href="{{ route('alumno.show',$alumno->id_persona)}}" class="btn btn-primary">Ver</a></td>
                                  @endif
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('registros') }}" class="btn btn-primary">Ver más</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
</div>
@stop