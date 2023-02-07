@extends('layouts.default')
@section('content')
<div class="container mt-2">
    <h1 class="display-3 text-center mt-5">Registros anteriores alumnos </h1>
    <div class="padding mt-4">
        <div class="row container d-flex justify-content-center">
        <div class="col-lg-8 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-header">
                          <form action="{{ route('registrosAlumno') }}">
                            <div class="input-group">
                                <input type="search" name="nombre" class="form-control rounded"  value="@if(isset($_GET['nombre'])){{$_GET['nombre']}}@endif" placeholder="Busqueda por nombre" aria-label="Search" aria-describedby="search-addon" />
                                <button type="submit" class="btn btn-primary">Buscar</button>
                              </div>
                            </form>
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
                                  @if (Auth::user()->tipo_usuario == 'coordinador')
                                    <th><i class="bi bi-trash"></i> Eliminar</th>
                                  @elseif (Auth::user()->tipo_usuario == 'tempresa' || Auth::user()->tipo_usuario == 'tuniversidad')
                                    <th><i class="bi bi-eye"></i> Ver</th>
                                  @endif
                                </tr>
                              </thead>
                              <tbody>
                                @if ($opcion == 1)
                                @foreach ($personas as $persona)
                                <tr>
                                  @if ($alumnos->where('id_persona',$persona->id)->value('id') !== null)
                                      @if ($alumnos->where('id_persona',$persona->id)->value('id') == null)
                                        <td>{{$persona->nombre}}</td>
                                      @else
                                      <td>{{$alumnos->where('id_persona',$persona->id)->value('persona.nombre')}}</td>
                                      @endif

                                      @if ($alumnos->where('id_persona',$persona->id)->value('id') == null)
                                        <td>-</td>
                                      @else
                                      <td>{{$alumnos->where('id_persona',$persona->id)->value('fichaDual.empresa.nombre')}}</td>
                                      @endif

                                      @if ($alumnos->where('id_persona',$persona->id)->value('id') == null)
                                        <td>-</td>
                                      @else
                                      <td>{{$alumnos->where('id_persona',$persona->id)->value('curso')}}</td>
                                      @endif

                                      @if ($alumnos->where('id_persona',$persona->id)->value('id') == null)
                                        <td>-</td>
                                      @else
                                      <td>{{$alumnos->where('id_persona',$persona->id)->value('grado.nombre')}}</td>
                                      @endif

                                      @if ($alumnos->where('id_persona',$persona->id)->value('id') == null)
                                        <td>-</td>
                                      @else
                                        <td>{{$evaluaciones->where('id_ficha',$ficha->where('id_alumno',$alumnos->where('id_persona',$persona->id)->value('id'))->value('id'))->value('valoracion')}}</td>
                                      @endif

                                      @if (Auth::user()->tipo_usuario == 'coordinador')
                                        <td>
                                          <form method="POST" action="{{ route('alumno.destroy', [$alumnos->where('id_persona',$persona->id)->value('id')]) }}">
                                            @csrf
                                            @method("DELETE")
                          
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                          </form>
                                        </td>
                                      @elseif (Auth::user()->tipo_usuario == 'tempresa' || Auth::user()->tipo_usuario == 'tuniversidad')
                                        <td>
                                          <a href="{{ route('alumno.show', [$alumnos->where('id_persona',$persona->id)->value('id')]) }}" class="btn btn-primary">Ver</a>
                                        </td>
                                      @endif
                                  @endif
                                </tr>
                                @endforeach

                                @else
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
                                @if($alumno->fichaDual)
                                  @php
                                    $nota_trabajo = 0; $nota_diario = 0;
                                    $suma = 0;
                                    $count = $alumno->fichaDual->calificaciones->evaluacionTrabajo->count();
                                  @endphp
                                  @foreach ($alumno->fichaDual->calificaciones->evaluacionTrabajo as $trabajo)
                                    @php
                                      $suma += $trabajo->evaluacion->valoracion;
                                    @endphp
                                  @endforeach
                                  @php
                                    if ($count > 0)
                                        $nota_trabajo = (floatval($suma)/floatval($count)); 
                                    $count = $alumno->fichaDual->calificaciones->evaluacionDiario->count();
                                    $suma = 0;
                                  @endphp
                                  @foreach ($alumno->fichaDual->calificaciones->evaluacionDiario as $diario)
                                    @php
                                      $suma += $diario->evaluacion->valoracion;
                                    @endphp
                                  @endforeach
                                  @php
                                    if ($count > 0)
                                        $nota_diario = (floatval($suma)/floatval($count)); 
                                  @endphp
                                  @if ($alumno->fichaDual->calificaciones->evaluacionTrabajo == null || 
                                       $alumno->fichaDual->calificaciones->evaluacionDiario == null)
                                    <td>-</td>
                                  @else
                                    <td>{{round(($nota_trabajo + $nota_diario) / 2, 2)}}</td>
                                  @endif
                                @else
                                  <td>-</td>
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
                                @endif
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