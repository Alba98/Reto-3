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
                                  @if ($alumno->fichaDual == null)
                                    <td>-</td>
                                  @else
                                  <td>{{$alumno->fichaDual->empresa->nombre}}</td>
                                  @endif
                                  <td>{{$alumno->curso}}</td>
                                  <td>{{$alumno->grado->nombre}}</td>
                                  @if ($evaluaciones->where('id_ficha',$ficha->where('id_alumno',$alumno->id)->value('id'))->value('valoracion') == null)
                                    <td>-</td>
                                  @else
                                    <td>{{$evaluaciones->where('id_ficha',$ficha->where('id_alumno',$alumno->id)->value('id'))->value('valoracion')}}</td>
                                  @endif
                                  @if (Auth::user()->tipo_usuario == 'coordinador')
                                  <td>
                                    <form method="POST" action="{{ route('alumno.destroy', [$alumno->id]) }}">
                                      @csrf
                                      @method("DELETE")
                    
                                      <button type="submit" class="btn btn-danger"> 
                                        Eliminar
                                      </button>
                                    </form>
                                  </td>
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
                            <a href="{{ route('registros') }}" class="btn btn-primary">Volver <i class="bi bi-arrow-return-left"></i></a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
</div>
@stop