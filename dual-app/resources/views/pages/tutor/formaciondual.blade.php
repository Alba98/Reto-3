@extends('layouts.default')
@section('content')
   
<div class="col-12">
        <h5 class="card-title">Ficha dual</h5>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Chasco Fernandez, Andrea</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac.</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac.</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac.</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac.</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac.</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac.</p>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="col-12">
          <div class="col-md-4">
            <h5 class="card-title">Acciones rapidas</h5>
            <div class="card">
              <div class="card-body">
               
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac.</p>
                <a href="{{ route('diarioAlumno', 1) }}" class="btn btn-primary">Ver Diario aprendizaje</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac.</p>
                <a href="#" class="btn btn-primary">Ficha de seguimiento</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dis turpis nisi, justo, integer dignissim ornare leo euismod ac.</p>
                <a href="#" class="btn btn-primary">Evaluacion trabajo en empresa</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      

@stop