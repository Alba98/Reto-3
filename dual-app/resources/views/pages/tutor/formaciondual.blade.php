@extends('layouts.default')
@section('content')
<div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">   
            <div class="card">
                <div class="card-header">Ficha dual</div>
                <div class="card-body">
                  <h5 class="card-title">{{($alumno->persona->nombre)}}</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati doloribus corporis ab ea deleniti repellendus deserunt hic tempora nobis sit cupiditate laborum reiciendis doloremque, sapiente, consequatur natus, numquam asperiores. Doloremque! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eum quas pariatur dolorem, nisi quaerat, molestias quasi non a, mollitia voluptatibus assumenda at! Quae debitis architecto distinctio, nisi dignissimos accusantium quos Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum illum ea tempora natus temporibus aperiam vitae aliquid vero architecto unde inventore laborum est cum accusamus dolore distinctio, dolor veniam amet!</p>
                  </div>
                </div>
          </div>
          <div class="col-sm-6">
            <div class="card-header">Acciones rapidas</div>
            <div class="card-body">
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="{{ route('diarioAlumno', 0) }}" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i>Ver Diario Aprendizaje</a>
              </div>
              <div class="card-body">        
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="{{ route('fichaSeguimineto') }}" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i>Ficha de seguimiento</a>
              </div>
              <div class="card-body">
                <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                <a href="#" class="btn btn-primary fs-5"><i class="bi bi-pentagon"></i>Evaluacion trabajo en empresa </a>
              </div>
          </div>
        </div>
      </div>
@stop
