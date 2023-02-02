@extends('layouts.default')
@section('content')

<div class="container">
        <div class="d-flex justify-content-center align-items-center" style="height: 148px;">
          <div class="text-center">
         
            <h1 class="display-4 text-dark">Diario aprendizaje  <a href="{{ route('evaluacionDiario') }}" class="btn btn-primary fs-5 pull-right">Evaluar Diario</a></h1>
            <p class="lead text-muted">At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus vestibulum, facilisi ac, sed faucibus.</p>
          </div>
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
                                      <th><i class="bi bi-star-fill"></i> Email</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>Samuel</td>
                                      <td>Mercedes-Benz</td>
                                      <td>2017-2018</td>
                                      <td>Historia</td>
                                      <td>samuel@egibide.org</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
</div>

<div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th><i class="bi bi-person"></i> Periodo</th>
            <th><i class="bi bi-building"></i> Actividades desarrolladas</th>
            <th><i class="bi bi-justify-left"></i> Reflexion y progreso</th>
            <th><i class="bi bi-justify-left"></i> Problemas o dificultades</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>22/12/22</td>
            <td>Fire&Blood</td>
            <td>George</td>
            <td>George</td>
          </tr>
          <tr>
            <td>22/12/22</td>
            <td>Fire&Blood</td>
            <td>George</td>
            <td>George</td>
          </tr>
          <tr>
            <td>22/12/22</td>
            <td>Fire&Blood</td>
            <td>George</td>
            <td>George</td>
          </tr>
          <tr>
        </tbody>
      </table>
    </div>
  </div>

           
@stop