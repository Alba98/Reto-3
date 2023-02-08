@extends('layouts.default')
@section('content')
 
<div class="container">
        <div class="text-center">
          <h1 class="my-4">Evaluacion Ficha Aprendizaje</h1>
        </div>
      </div>
    
    <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Curso</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">George R.R Martin</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Fecha</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">22/12/22</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Estudiante</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">Chasco Fernandez, Andrea</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Tutor universidad</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">Juan Alberto</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Tutor empresa</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">Fernandez, Ane</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th><i class="bi bi-person"></i> Indicador</th>
                <th><i class="bi bi-building"></i> Valoracion</th>
                <th><i class="bi bi-justify-left"></i> Observaciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Esfuerzo y regularidad</td>
                <td>Suficiente<button class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split btn-desplegable" type="button" id="dropdownMenuButton" data-toggle="dropdown"></button></td>
                <td>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus 
                    vestibulum, facilisi ac, sed faucibus.</td>
              </tr>
              <tr>
                <td>Orden, estructura y presentacion</td>
                <td>Suficiente<button class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split btn-desplegable"  type="button" id="dropdownMenuButton" data-toggle="dropdown"></button></td>
                <td>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus 
                    vestibulum, facilisi ac, sed faucibus.</td>
              </tr>
              <tr>
                <td>Contenido</td>
                <td>Suficiente<button class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split btn-desplegable"  type="button" id="dropdownMenuButton" data-toggle="dropdown"></button></td>
                <td>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus 
                    vestibulum, facilisi ac, sed faucibus.</td>
              </tr>
              <tr>
                <td>Terminologia y notacion</td>
                <td>Suficiente<button class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split btn-desplegable"  type="button" id="dropdownMenuButton" data-toggle="dropdown"></button></td>
                <td>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus 
                    vestibulum, facilisi ac, sed faucibus.</td>
              </tr>
              <tr>
                <td>Calidad del trabajo</td>
                <td>Suficiente<button class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split btn-desplegable"  type="button" id="dropdownMenuButton" data-toggle="dropdown"></button></td>
                <td>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus 
                    vestibulum, facilisi ac, sed faucibus.</td>
              </tr>
              <tr>
                <td>Relaciona conceptos</td>
                <td>Suficiente<button class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split btn-desplegable"  type="button" id="dropdownMenuButton" data-toggle="dropdown"></button></td>
                <td>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus 
                    vestibulum, facilisi ac, sed faucibus.</td>
              </tr>
              <tr>
                <td>Reflexion sobre aprendizaje</td>
                <td>Suficiente<button class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split btn-desplegable"  type="button" id="dropdownMenuButton" data-toggle="dropdown"></button></td>
                <td>At lacus vitae nulla sagittis scelerisque nisl. Pellentesque duis cursus 
                    vestibulum, facilisi ac, sed faucibus.</td>
              </tr>
              <tr>
                <td>Nota</td>
                <td>5</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      
      


      <div class="card-footer text-center">
          <button class="btn btn-primary ">Guardar</button>
      </div>
    </div>
  </div>
</div>
</div>
</div>

@stop

