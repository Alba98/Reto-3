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
          <form action="{{ route('trabajo.store', $alumno) }}" method="POST">
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
                <td class="bg-primary bg-gradient text-light">ASPECTOS ACTITUDINALES</td>
                <td class="bg-primary bg-gradient"></td>
                <td class="bg-primary bg-gradient"></td>
              </tr>
              <tr>
                <td>Actitud y disposición para el trabajo</td>
                <td>
                  <select class="form-select" name="nota1" id="nota1">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones1" id="observaciones1" rows="1"></textarea>
                </td>
              </tr>
              <tr>
                <td>Puntualidad</td>
                <td>
                  <select class="form-select" name="nota2" id="nota2">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones2" id="observaciones2" rows="1"></textarea>
                </td>
              </tr>
              <tr>
                <td>Responsabilidad</td>
                <td>
                  <select class="form-select" name="nota3" id="nota3">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones3" id="observaciones3" rows="1"></textarea>
                </td>
              </tr>
              <tr>
                <td class="bg-primary bg-gradient text-light">CAPACIDADES</td>
                <td class="bg-primary bg-gradient"></td>
                <td class="bg-primary bg-gradient"></td>
              </tr>
              <tr>
                <td>Capacidad de resolución de problemas</td>
                <td>
                  <select class="form-select" name="nota4" id="nota4">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones4" id="observaciones4" rows="1"></textarea>
                </td>
              </tr>
              <tr>
                <td>Calidad en el trabajo</td>
                <td>
                  <select class="form-select" name="nota5" id="nota5">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones5" id="observaciones5" rows="1"></textarea>
                </td>
              </tr>
              <tr>
                <td>Implicación e integración en el equipo</td>
                <td>
                  <select class="form-select" name="nota6" id="nota6">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones6" id="observaciones6" rows="1"></textarea>
                </td>
              </tr>
              <tr>
                <td>Toma de decisiones</td>
                <td>
                  <select class="form-select" name="nota7" id="nota7">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones7" id="observaciones7" rows="1"></textarea>
                </td>
              </tr>
              <tr>
                <td>Capacidad de comunicación oral y escrita</td>
                <td>
                  <select class="form-select" name="nota8" id="nota8">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones8" id="observaciones8" rows="1"></textarea>
                </td>
              </tr>
              <tr>
                <td>Capacidad de planificación y organización</td>
                <td>
                  <select class="form-select" name="nota9" id="nota9">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones9" id="observaciones9" rows="1"></textarea>
                </td>
              </tr>
              <tr>
                <td>Capacidad de aprendizaje y asimilación</td>
                <td>
                  <select class="form-select" name="nota10" id="nota10">
                    <option value="3">Insuficiente</option>
                    <option value="5">Suficiente</option>
                    <option value="7">Notable</option>
                    <option value="9">Sobresaliente</option>
                  </select>
                </td>
                <td>
                  <textarea class="form-control" name="observaciones10" id="observaciones10" rows="1"></textarea>
                </td>
              </tr>
              <tr>
                <td class="bg-primary bg-gradient text-light">Nota media</td>
                <!-- La nota media va variando dependiendo de el valor de cada campo, a tráves de js -->
                <td class="bg-primary bg-gradient text-light"><span id="notaMedia"></span></td>
                <td class="bg-primary bg-gradient text-light"></td>
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

