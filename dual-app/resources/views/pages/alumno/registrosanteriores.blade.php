@extends('layouts.default')
@section('content')
<div class="container mt-2">
    <h1 class="display-3 text-center mt-5">Registros años anteriores</h1>
    <div class="padding mt-4">
        <div class="row container d-flex justify-content-center">
        <div class="col-lg-8 grid-margin stretch-card">
                      <div class="card">
                        <div class="card-header">
                            <span>Registros diario aprendizaje</span>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th><i class="bi bi-calendar-check"></i> Periodo</th>
                                  <th><i class="bi bi-text-left"></i> Curso</th>
                                  <th><i class="bi bi-buildings"></i> Empresa</th>
                                  <th><i class="bi bi-star"></i> Nota</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>2021-2022</td>
                                  <td>1</td>
                                  <td>Mercedes-Benz</td>
                                  <td>7</td>
                                </tr>
                                <tr>
                                  <td>2022-2023</td>
                                  <td>2</td>
                                  <td>Mc Donalds</td>
                                  <td>6</td>
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