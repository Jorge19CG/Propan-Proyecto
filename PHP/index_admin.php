<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<?php

session_start();
if(!isset($_SESSION['id_admin'])){
     echo '<div class="alert alert-danger" role="alert">Acceso denegado.<BR><a href="cerrarsesion.php">Iniciar Sesion</a></div>';
    session_destroy(); 
    die();
}
?>
<html>
<head>
  <link rel="stylesheet" href="../CSS/estilo_inicio.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Propan de Morelos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="botones.css" rel="stylesheet">
</head>
    <body>
    <div class="header">
  <h1>Administrador</h1>
  <p>Pantalla del administrador</p>
  <th><a class="cerrar"href="cerrarsesion.php">Cerrar Sesion </a></th>
</div>
        <style>
            a.cerrar{
                color:red
            }
.todo{  
  text-align: center;
  position: fixed; /* or absolute */
  top: 50%;
  left: 30%;
}
.header {
  padding: 60px;
  text-align: center;
  background: #3a377c;
  color: white;
  font-size: 30px;
}
        </style>
    <div style="width:800px; " class="todo">
    <div style="float: left; width:  px"> 
        <form id="thisone" action="Adminproductos.php" method="post">
            <input type="submit" name = "mod_art" value="Modificar Articulo" style="height:50px; width:200px;">
        </form>
    </div>
    <div style="float: right; width: 225px"> 
        <form id="thistoo" action="Admincursos.php" method="post">
            <input type="submit" name = "mod_cur" value="Modificar Curso" style="height:50px; width:200px;">
        </form>
    </div>
    <br><br><br>
    <br>
    <div style="float: left; width:  px"> 
        <form id="thisone" action="Admin_consulta_cursos.php" method="post">
            <input type="submit" name = "reg_cur" value="Registro cursos" style="height:50px; width:200px;">
        </form>
    </div>
    <div style="float: right; width:  px"> 
        <form id="thisone" action="AdminImagenes.php" method="post">
            <input type="submit" name = "ima_mod" value="Modificar Imagenes" style="height:50px; width:200px;">
        </form>
    </div>
</div>




    </body>
</html>