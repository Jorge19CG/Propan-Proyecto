
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

<title>Imagenes</title>
</head>
<body>
<form>
<button class="btn btn-primary" type="button" onclick="history.back()"><i class="bi bi-arrow-left"></i></button>
</form>
<div class="center mt-5">
    <div class="card pt-3" >
            <p style="font-weight: bold; color: #0F6BB7; font-size: 22px;">Articulos</p>
        <div class="container-fluid p-2">
<table class="table">
<thead>
<tr>
<th scope="col">#ID</th>
<th scope="col">Imagen</th>

<th scope="col">Categoria</th>

  <th> <a href="cerrarsesion.php">Cerrrar Sesion 
</tr>
</thead>
<tbody>
            <?php $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes "); 
            $numero = mysqli_num_rows($busqueda); ?>
            <h5 class="card-tittle">Resultados (<?php echo $numero; ?>)</h5>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
<tr class="tu">
<th scope="row" style="vertical-align: middle;"><?php echo $resultado["id"]; ?></th>
<td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>" width="100" ></td>
<td style="vertical-align: middle;"><?php echo $resultado["categoria"]; ?></td>

<td style="vertical-align: middle;"><a href="modificar_imagen.php?id=<?php echo $resultado["id"]; ?>"><button type='button' class='btn btn-success'>Modificar</button></a></td>
</tr>    

                <?php } ?>

</tbody>
</table>
            </div>
        </div>
    </div>
</div>






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>

</body>
</html>
