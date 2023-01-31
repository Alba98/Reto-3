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
                                <tr>
                                  <td>Samso Park</td>
                                  <td>Ingenieria industrial</td>
                                  <td>samso@gmail.com</td>
                                  <td>765432876</td>
                                  <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
                                <tr>
                                  <td>Marlo Sanki</td>
                                  <td>Ingenieria Informatica</td>
                                  <td>marlo@gmail.com</td>
                                  <td>654927394</td>
                                  <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
                                <tr>
                                  <td>John ryte</td>
                                  <td>Ingenieria industrial</td>
                                  <td>john@gmail.com</td>
                                  <td>472498123</td>
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