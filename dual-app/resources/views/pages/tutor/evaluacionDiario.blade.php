@extends('layouts.default')
@section('content')
  
<div class="container">
        <div class="text-center">
          <h1 class="my-4">Evaluacion Diario Aprendizaje</h1>
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
                    <div class="card-text">{{$alumno->fichaDual->curso}}</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Fecha</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">{{$fechahoy}}</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Estudiante</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">{{$alumno->persona->ape1}} {{$alumno->persona->ape2}}, {{$alumno->persona->nombre}}</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Tutor universidad</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">{{$alumno->fichaDual->tuniversidad->docente->persona->ape1}} {{$alumno->fichaDual->tuniversidad->docente->persona->ape2}}, {{$alumno->fichaDual->tuniversidad->docente->persona->nombre}}</div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="card-title">Tutor empresa</div>
                  </div>
                  <div class="col-md-9">
                    <div class="card-text">{{$alumno->fichaDual->tempresa->docente->persona->ape1}} {{$alumno->fichaDual->tempresa->docente->persona->ape2}}, {{$alumno->fichaDual->tempresa->docente->persona->nombre}}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <form action="{{ route('evaluacion.store', $alumno) }}" method="POST">
            @csrf
            <input type="hidden" name="id_ficha" value="{{$alumno->fichaDual->id}}">
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
                <td>
                  <select class="form-select" name="nota1" id="nota1">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones1" id="observaciones1" rows="2"></textarea>
                </td>
              </tr>
              <tr>
                <td>Orden, estructura y presentacion</td>
                <td>
                  <select class="form-select" name="nota2" id="nota2">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones2" id="observaciones2" rows="2"></textarea>
                </td>
              </tr>
              <tr>
                <td>Contenido</td>
                <td>
                  <select class="form-select" name="nota3" id="nota3">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones3" id="observaciones3" rows="2"></textarea>
                </td>
              </tr>
              <tr>
                <td>Terminologia y notacion</td>
                <td>
                  <select class="form-select" name="nota4" id="nota4">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones4" id="observaciones4" rows="2"></textarea>
                </td>
              </tr>
              <tr>
                <td>Calidad del trabajo</td>
                <td>
                  <select class="form-select" name="nota5" id="nota5">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones5" id="observaciones5" rows="2"></textarea>
                </td>
              </tr>
              <tr>
                <td>Relaciona conceptos</td>
                <td>
                  <select class="form-select" name="nota6" id="nota6">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones6" id="observaciones6" rows="2"></textarea>
                </td>
              </tr>
              <tr>
                <td>Reflexion sobre aprendizaje</td>
                <td>
                  <select class="form-select" name="nota7" id="nota7">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones7" id="observaciones7" rows="2"></textarea>
                </td>
              </tr>
              <tr>
                <td>Nota media</td>
                <td>5</td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-footer text-center">
          <input class="btn btn-primary mb-3" type="submit" value="Guardar">
      </div>
    </form>
    </div>
  </div>
</div>
</div>
</div>
@stop