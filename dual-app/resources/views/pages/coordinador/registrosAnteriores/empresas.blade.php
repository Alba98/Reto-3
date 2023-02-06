@extends('layouts.default')
@section('content')
<div class="container mt-2">
    <h1 class="display-3 text-center mt-5">Registros anteriores empresas</h1>
    <div class="padding mt-4">
        <div class="row container d-flex justify-content-center">
        <div class="col-lg-8 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-header">
                            <span>Empresas cooperativas con la Universidad de Deusto</span>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th><i class="bi bi-person"></i> Nombre</th>
                                  <th><i class="bi bi-building"></i> Sector</th>
                                  <th><i class="bi bi-file-text"></i> Cif</th>
                                  <th><i class="bi bi-people"></i> Tutores</th>
                                  <th><i class="bi bi-trash"></i> Eliminar</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($empresas as $empresa)
                                <tr>
                                  <td>{{$empresa->nombre}}</td>
                                  <td>{{$empresa->sector}}</td>
                                  <td>{{$empresa->cif}}</td>
                                  <td>{{$tempresa->where('id_empresa',$empresa->id)->count()}}</td>
                                  <td>
                                    <form method="POST" action="{{ route('empresa.destroy', [$empresa->id]) }}">
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