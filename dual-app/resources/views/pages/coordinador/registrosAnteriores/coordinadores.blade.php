@extends('layouts.default')
@section('content')
<div class="container mt-2">
    <h1 class="display-3 text-center mt-5">Registros anteriores coordinadores</h1>
    <div class="padding mt-4">
        <div class="row container d-flex justify-content-center">
        <div class="col-lg-8 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-header">
                            <span>Coordinadores de la Universidad de Deusto</span>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th><i class="bi bi-person"></i> Nombre</th>
                                  <th><i class="bi bi-justify-left"></i> Grado</th>
                                  <th><i class="bi bi-envelope"></i> Email</th>
                                  <th><i class="bi bi-telephone"></i> Teléfono</th>
                                  <th><i class="bi bi-trash"></i> Eliminar</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($coordinadores as $coordinador)
                                <tr>
                                  <td>{{$personas->where('id',$coordinador->docente->id_persona)->value('nombre')}}</td>
                                  <td>{{$grados->where('id',$coordinador->id_grado)->value('nombre')}}</td>
                                  <td>{{$usuarios->where('id_persona',$coordinador->docente->id_persona)->value('email')}}</td>
                                  <td>{{$personas->where('id',$coordinador->docente->id_persona)->value('telefono')}}</td>
                                  <td>
                                    <form method="POST" action="{{ route('coordinador.destroy', [$coordinador->id]) }}">
                                      @csrf
                                      @method("DELETE")
                                      <button type="submit" class="btn btn-danger"> 
                                        Eliminar
                                      </button>
                                    </form>
                                  </td>
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