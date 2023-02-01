@extends('layouts.default')
@section('content')
<div class="container mt-2">
    <h1 class="display-3 text-center mt-5">Registros anteriores alumnos</h1>
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
                                  <th><i class="bi bi-trash"></i> Eliminar</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Samso Park</td>
                                  <td>Mercedes-Benz</td>
                                  <td>2017-2018</td>
                                  <td>Ingenieria informatica</td>
                                  <td>7</td>
                                  <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
                                <tr>
                                  <td>Marlo Sanki</td>
                                  <td>Mercedes-Benz</td>
                                  <td>2014-2015</td>
                                  <td>Historia del arte</td>
                                  <td>8</td>
                                  <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
                                <tr>
                                  <td>John ryte</td>
                                  <td>Mercedes-Benz</td>
                                  <td>2016-2017</td>
                                  <td>Ingenieria industrial</td>
                                  <td>9</td>
                                  <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
                                <tr>
                                  <td>Peter mark</td>
                                  <td>Mercedes-Benz</td>
                                  <td>2022-2023</td>
                                  <td>Ingenieria informatica</td>
                                  <td>10</td>
                                  <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
                                <tr>
                                  <td>Dave</td>
                                  <td>Mercedes-Benz</td>
                                  <td>2021-2022</td>
                                  <td>Historia del arte</td>
                                  <td>7</td>
                                  <td><button class="btn btn-danger">Eliminar</button></td>
                                </tr>
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