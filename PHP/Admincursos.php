
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

<script type="text/javascript">
  
function Borrar()
{
   var respuesta = confirm("Estas seguro que deseas eliminar este articulo");
   if(respuesta== true){

   }
   else{
     return false;
   }
   }
</script>


<title>Consulta basica</title>
</head>
<body>
<form>
<button class="btn btn-primary" type="button" onclick="history.back()"><i class="bi bi-arrow-left"></i></button>
</form>
<div class="center mt-5">
    <div class="card pt-3" >
            <p style="font-weight: bold; color: #0F6BB7; font-size: 22px;">Cursos</p>
        <div class="container-fluid p-2">
<table class="table">
<thead>
<tr>
<th scope="col">#ID</th>
<th scope="col">Nombre</th>
<th scope="col">Descripción</th>
<th> <a href="nuevo_curso.php"> <button type="button" class="btn btn-primary">Nuevo Curso</button> </a> </th>
        <th> <a href="cerrarsesion.php">Cerrar Sesion 
</tr>
</thead>
<tbody>
            <?php $busqueda=mysqli_query($conex,"SELECT * FROM p_cursos "); 
            $numero = mysqli_num_rows($busqueda); ?>
            <h5 class="card-tittle">Resultados (<?php echo $numero; ?>)</h5>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
<tr class="tu">
<th scope="row" style="vertical-align: middle;"><?php echo $resultado["id"]; ?></th>
<td style="vertical-align: middle;"><?php echo $resultado["nombre"]; ?></td>
<td style="vertical-align: middle;"><?php echo $resultado["descripcion"]; ?></td>
<td style="vertical-align: middle;"><a href="modificar_cursos.php?id=<?php echo $resultado["id"]; ?>"><button type='button' class='btn btn-success'>Modificar</button></a></td>
<td style="vertical-align: middle;"><a href="eliminar_curso.php?id=<?php echo $resultado["id"]; ?>"><button type='button' class='btn btn-danger' onclick="return Borrar()">Eliminar</button></i></a></td>
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

