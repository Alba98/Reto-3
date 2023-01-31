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
                                  <th><i class="bi bi-buildings"></i> Sector</th>
                                  <th><i class="bi bi-telephone"></i> Teléfono</th>
                                  <th><i class="bi bi-people"></i> Tutores</th>
                                  <th><i class="bi bi-trash"></i> Eliminar</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Samso Park</td>
                                  <td>Industrial</td>
                                  <td>986476543</td>
                                  <td>7</td>
                                  <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
                                <tr>
                                  <td>Marlo Sanki</td>
                                  <td>Industrial</td>
                                  <td>128765987</td>
                                  <td>6</td>
                                  <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
                                <tr>
                                  <td>John ryte</td>
                                  <td>Industrial</td>
                                  <td>134564324</td>
                                  <td>4</td>
                                  <td><button class="btn btn-danger">Eliminar</button></td>
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