@extends('layouts.head')
@extends('layouts.sidebar')
@section('content')

<style>
h4{	margin-top:50px; }
h4 span{ font-size:13px; color:grey; }
</style>

<div class="container">
  <h1 class="page-header">Notificaciones</h1>

  <h4>Mensaje de notificacion</h4>
  <div class="alert alert-success">
    <a class="alert-link" href="#">Simple</a> notification message
  </div>

  <h4>Notification <span>with close</span></h4>
  <div class="alert alert-danger alert-dismissable">
    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
    Alert message with close button.
  </div>
  
  <h4>Notification Types</h4>
  <div class="alert alert-success">Success</div>
  <div class="alert alert-info">Info</div>
  <div class="alert alert-warning">Warning</div>
  <div class="alert alert-danger">Danger</div>
  
  

</div>
@stop
