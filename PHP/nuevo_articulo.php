
<?php 
header('Content-Type: text/html; charset=UTF-8');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

session_start();
if(!isset($_SESSION['id_admin'])){
     echo '<div class="alert alert-danger" role="alert">Acceso denegado.<BR><a href="login_admin.php">Iniciar Sesion</a></div>';
    session_destroy(); 
    die();
}
?>



<?php
  include "conex.php";
?>
<!DOCTYPE html>
<html>
<head>
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta de Producto</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="abs-center mt-50 p-5">
<div class="mb-4">
  <p style="font-weight: bold; color: #0F6BB7; font-size: 30px;">Nuevo Producto</p>
</div>
<form class="row g-3 needs-validation" action="nuevoV2.php" method="POST" novalidate enctype="multipart/form-data">

     <div class="col-md-5">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" name="nombre"  required >
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte su nombre.
      </div>
  </div>
  <div>
  <div class="col-md-5">
    <label for="validationCustom03" class="form-label:">Descripción</label>
    <textarea  class="form-control" name="descripcion"  cols="10" rows="5" required></textarea>
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte su descripcion
      </div>
  </div>
  <div></div>
  <div class="col-md-5">
    <label for="validationCustom02" class="form-label">Categoría</label>
    <select  class="form-control" name="categoria" >
    <option value="Coche" >Choco</option>
    <option value="Moto" >Mantequilla</option>
    <option value="Barco" >Granea</option>
    <option value="Esencia" >Esencia</option>
    <option value="Esencia" >Cremas</option>
    <option value="Esencia" >Margarina</option>
    </select>
    <div class="valid-feedback">
    Correcto!
    </div>
      
  </div>
  <div class="col-md-5">
    <label for="validationCustom04" class="form-label">Unidades Disponibles</label>
    <input type="text" class="form-control"  name="unidis"  required >
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte unidades disponibles
      </div>
  </div>

  <div class="col-md-5">
    <label for="validationCustom04" class="form-label">Peso</label>
    <input type="text" class="form-control"  name="peso"  required >
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte peso
      </div>
  </div>


  <div class="col-md-5">
    <label for="validationCustom04" class="form-label">Precio</label>
    <input type="text" class="form-control"  name="precio"  required >
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte precio
      </div>
  </div>
    
  
  <div class="col-md-5">
    <label for="validationCustom04" class="form-label">Imagen</label>
    <input type="file" class="form-control"  name="imagen" required>
    <div class="valid-feedback">
    Correcto!
    </div>
  </div>

  <div class="col-12">
    <button class="btn btn-primary" type="submit">Modificar</button>
  </div>


</form>


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
</body>
</html>