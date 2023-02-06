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
                                @foreach($fichas as $ficha)
                                <tr>
                                  <td>{{ ($ficha->alumno->persona->nombre)  }}</td>
                                  <td>{{ ($ficha->empresa->nombre)  }}</td>
                                  <td>2017-2018</td>
                                  <td>{{ ($ficha->alumno->grado->nombre)  }}</td>
                                  <td>7</td>
                                  <td><a href="{{ route('fichaAlumno', $ficha->alumno) }}" class="btn btn-primary">Ver</a></td>
                                </tr>
                                @endforeach
                                <tr>
                                  <td>Marlo Sanki</td>
                                  <td>Mercedes-Benz</td>
                                  <td>2014-2015</td>
                                  <td>Historia del arte</td>
                                  <td>8</td>
                                  <td><a href="{{ route('fichaAlumno') }}" class="btn btn-primary">Ver</a></td>
                                </tr>
                                <tr>
                                  <td>John ryte</td>
                                  <td>Mercedes-Benz</td>
                                  <td>2016-2017</td>
                                  <td>Ingenieria industrial</td>
                                  <td>9</td>
                                  <td><a href="{{ route('fichaAlumno') }}" class="btn btn-primary">Ver</a></td>
                                </tr>
                                <tr>
                                  <td>Peter mark</td>
                                  <td>Mercedes-Benz</td>
                                  <td>2022-2023</td>
                                  <td>Ingenieria informatica</td>
                                  <td>10</td>
                                  <td><a href="{{ route('fichaAlumno') }}" class="btn btn-primary">Ver</a></td>
                                </tr>
                                <tr>
                                  <td>Dave</td>
                                  <td>Mercedes-Benz</td>
                                  <td>2021-2022</td>
                                  <td>Historia del arte</td>
                                  <td>7</td>
                                  <td><a href="{{ route('fichaAlumno') }}" class="btn btn-primary">Ver</a></td>
                                </tr>
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