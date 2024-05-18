<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

session_start();
if(!isset($_SESSION['usuario'])){
     echo '<div class="alert alert-danger" role="alert">Acceso denegado.<BR><a href="login_admin.php">Iniciar Sesion</a></div>';
    session_destroy(); 
    die();
}
?>




<html>
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="../imagen_login/propan_vip.jpeg" class="img-fluid" alt="Sample image" width="700">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
  
          <form class="row g-3 needs-validation"  novalidate  action="recuperarcontra.php" method="post">
        
            <!-- Email  -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control form-control-lg" placeholder="Introduzca un correo valido" required name="email"/>
              <label class="form-label" for="form3Example3">Email</label>
              <div class="invalid-feedback">
                  Correo Invalido.
                </div>
            </div>
  
            <!--Contraseña-->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Introduzca clave" required name="contraseña" minlength="10"/>
              <label class="form-label" for="form3Example4">Clave</label>
              <div class="invalid-feedback">
                 Falta clave.
                </div>
            </div>  

                <!--Nueva Contraseña-->
                <div class="form-outline mb-3">
                  <input type="password" id="form3Example4" class="form-control form-control-lg" placeholder="Nueva Clave" required name="nuevacontra" minlength="10"/>
                  <label class="form-label" for="form3Example4">Nueva Clave</label>
                  <div class="invalid-feedback">
                     Falta nueva clave.
                    </div>
                </div>
  
            <div class="d-flex justify-content-between align-items-center">
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem; right: inherit;">Recuperar</button>
                <p class="small fw-bold mt-2 pt-1 mb-0"><a href="../login_usuario.html"class="link-danger">Regresar</a></p>
              
                  
          </div>
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  
  <script>
      // Validacion
    (function () {
      'use strict'
      var forms = document.querySelectorAll('.needs-validation')
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()
    </script>
  </section>
  </html>