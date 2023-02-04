
<div class="container mt-4">
    <h2 class="text-muted"><i class="bi bi-bell-fill"></i> Notificaciones</h2>
    <div class="row gap-3 p-3">
      @foreach ($notificaciones as $notificacion)
        <div class="col-md-3">
          <div class="card border-3 border-primary">
            <div class="card-body">
              <h4 class="card-title">{{ ($notificacion->mensaje) }}</h4>
              <p class="card-text text-muted">{{ ($notificacion->fecha) }}</p>
              <form method="POST" action="{{ route('notificaciones.destroy', [$notificacion->id]) }}">
                  @csrf
                  @method("DELETE")

                  <button type="submit" class="btn btn-primary fs-5"> 
                    Visto 
                    <!-- <i class="bi bi-patch-check-fill">  -->
                  </button>
              </form>
            </div>
          </div>
        </div>
      @endforeach
      <div class="col-md-3">
        <div class="card  border-3 border-primary">
          <div class="card-body">
            <h4 class="card-title">Rellene el diario de aprendizaje</h4>
            <p class="card-text text-muted">30/01/2023</p>
            <a href="#" class="btn btn-primary fs-5">Visto <i class="bi bi-patch-check-fill"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card border-3 border-primary">
          <div class="card-body">
            <h4 class="card-title">Tiene una reunión la semana que viene</h4>
            <p class="card-text text-muted">06/02/2023</p>
            <a href="#" class="btn btn-primary fs-5">Visto <i class="bi bi-patch-check-fill"></i></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card  border-3 border-primary">
          <div class="card-body">
            <h4 class="card-title ">Ya estan las notas puestas, ve a revisarlas</h4>
            <p class="card-text text-muted">23/03/2023</p>
            <a href="#" class="btn btn-primary fs-5">Visto <i class="bi bi-patch-check-fill"></i></a>
          </div>
        </div>
      </div>
    </div>
