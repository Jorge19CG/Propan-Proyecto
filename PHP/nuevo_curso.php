<?php
  include "conex.php";
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/estilo_inicio.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
<title>Modificar Curso</title>
<link href="botones.css" rel="stylesheet">
</head>
<body>
<form>
<button class="btn btn-primary" type="button" onclick="history.back()"><i class="bi bi-arrow-left"></i></button>
</form>
<div class="todo">
  
  <div id="contenido">
  	<div style="margin: auto; width: 500px; border-collapse: separate; border-spacing: 10px 5px; text-align: center;" >
  		<span> <h1>Insertar nuevo curso</h1> </span>
  		<br>
	  <form class="needs-validation" action="nuevocursoV2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;" enctype="multipart/form-data" novalidate >
	  
  		<label class="form-label">Nombre</label>
  		<input type="text" name="nombre" required class="form-control"><br>

  		<label>Descripcion: </label>
  		<br><textarea class="form-control" style="border-radius: 10px;" rows="3" cols="30" name="descripcion"required ></textarea><br>
		  <div class="invalid-feedback">
			  Por favor brinda tu descripcion.
			</div>
  		<button type="submit" name="guardar" class="btn">Guardar</button>
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
</body>
</html>