@extends('layouts.default')
@section('content')
<div class="container mt-2">
    <h1 class="display-3 text-center mt-5">Registros tutores empresa</h1>
    <div class="padding mt-4">
        <div class="row container d-flex justify-content-center">
        <div class="col-lg-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-header">
              <span>Tutores de <b>{{$empresa}}</b></span>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th><i class="bi bi-person"></i> Nombre</th>
                      <th><i class="bi bi-telephone"></i> Teléfono</th>
                      <th><i class="bi bi-envelope"></i> Email</th>
                      <th><i class="bi bi-people"></i> Alumnos</th>
                      <th><i class="bi bi-trash"></i> Eliminar</th>
                      <th><i class="bi bi-eye"></i> Ver</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tutores as $tutor)
                      @if($tutor)
                        <tr>
                          <td>{{$tutor->docente->persona->nombre }}</td>
                          <td>{{$tutor->docente->persona->telefono }}</td>
                          <td>{{$tutor->docente->persona->usuario->email  }}</td>
                          <td>{{$fichas->where('id_tempresa', $tutor->id)->count()}}</td>
                          <td>
                            <form method="POST" action="{{ route('tEmpresa.destroy', $tutor->id) }}">
                              @csrf
                              @method("DELETE")

                              <button type="submit" class="btn btn-danger"> 
                                Eliminar
                              </button>
                            </form>
                          </td>
                          @if($fichas->where('id_tempresa', $tutor->id)->count() != 0)
                            <td><a href="{{ route('tempresa.showAlumnos', $tutor->id_docente)}}" class="btn btn-primary">Ver</a></td>
                          @else
                            <td></td>
                          @endif
                        </tr>
                      @endif
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
@stop