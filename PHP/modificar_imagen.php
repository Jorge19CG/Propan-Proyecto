
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

$busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '".$_REQUEST["id"]."' "); 
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
<form class="row g-3 needs-validation" action="modificarimagenv2.php" method="POST" novalidate enctype="multipart/form-data">

    <input type="hidden" name="id"  value="<?php echo $_GET['id']?>">
     <div class="col-md-5">
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

