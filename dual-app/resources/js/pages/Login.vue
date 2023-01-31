<template>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
              <div class="card" style="border-radius: 1rem;">
                <div class="row g-0">
                  <div class="col-md-6 col-lg-5 d-none d-md-block text-center" >
                    <img  src="../../img/logo-chica.png"
                      alt="login form" class="img-fluid"/>
                  </div>
                  <div class="col-md-6 col-lg-7 d-flex align-items-center">
                    <div class="card-body p-4 p-lg-5 text-black">
      
                       <form action="home">
                          <div class="d-flex align-items-center mb-3 pb-1">
                              <span class="h1 fw-bold mb-0">DeustoDual</span>
                          </div>
                          <div class="form-outline mb-4">
                              <label class="form-label" for="form2Example17">Nombre del usuario</label>
                              <input type="email" id="form2Example17" class="form-control form-control-lg" />
                          </div>
        
                          <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example27">Contraseña</label>
                            <input type="password" id="form2Example27" class="form-control form-control-lg"/>
                          </div>                              
                        <a class="small text-muted" href="#!">Forgot password?</a>         
                         <button id="submit" type="submit"  class="d-none"></button>                    
                      </form>            
                      <div class="pt-1 mb-4">
                              <div><button id='Blog' @click = "ruta" class="btn btn-dark btn-lg btn-block" onclick="document.getElementById('submit').click()">Log In</button></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
</template>
<script>
    
  export default {
      methods: {
            ruta(){
                window.location.href = "home";
                
            }
        },
    }
</script>