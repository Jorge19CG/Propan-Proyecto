
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
include("conex.php");

$busqueda=mysqli_query($conex,"SELECT * FROM p_articulos WHERE id = '".$_REQUEST["id"]."' "); 
if ($resultado = mysqli_fetch_assoc($busqueda)){}

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<title>Insertar Datos</title>
</head>
<body>
<div class="abs-center mt-50 p-5">
<div class="mb-4">
  <p style="font-weight: bold; color: #0F6BB7; font-size: 30px;">Modificar artículo</p>
</div>
<form class="row g-3 needs-validation" action="modificarV2.php" method="POST" novalidate enctype="multipart/form-data">

    <input type="hidden" name="id"  value="<?php echo $_GET['id']?>">
    <input type="hidden"  name="amo_id" value="<?php echo $_SESSION['id_admin'] ?>">
     <div class="col-md-5">
    <label for="validationCustom01" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="validationCustom01" name="nombre"  required value="<?php echo $resultado["nombre"]; ?>">
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
    <textarea  class="form-control" name="descripcion"  cols="10" rows="5"><?php echo $resultado["descripcion"]; ?></textarea>
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
    <option value="<?php echo $resultado["categoria"]; ?>" selected><?php echo $resultado["categoria"]; ?></option>
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
    <input type="text" class="form-control"  name="unidades_disponibles"  required value="<?php echo $resultado["unidades_disponibles"]; ?>">
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte unidades disponibles
      </div>
  </div>

  <div class="col-md-5">
    <label for="validationCustom04" class="form-label">Peso</label>
    <input type="text" class="form-control"  name="peso"  required value="<?php echo $resultado["peso"]; ?>">
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte peso
      </div>
  </div>


  <div class="col-md-5">
    <label for="validationCustom04" class="form-label">Precio</label>
    <input type="text" class="form-control"  name="precio"  required value="<?php echo $resultado["precio"]; ?>">
    <div class="valid-feedback">
    Correcto!
    </div>
      <div class="invalid-feedback">
      Por favor, inserte precio
      </div>
  </div>
    
  
  <div class="col-md-5">
    <label for="validationCustom04" class="form-label">Imagen</label>
    <input type="file" class="form-control"  name="imagen">
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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

</body>
</html>

