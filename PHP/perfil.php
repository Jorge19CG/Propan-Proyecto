<?php
include 'conex.php';
session_start();
if(!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("Por favor debes iniciar sesion");
        window.location = "../login_usuario.html";
    </script>
    ';
    session_destroy(); 
    die();
}
$usuario = $_POST['nombre'];
$busqueda=mysqli_query($conex,"SELECT * FROM p_clientes WHERE email='$usuario'");
if ($resultado = mysqli_fetch_assoc($busqueda)){}
?>

<html>
<head>
  <link rel="stylesheet" href="perfil.css">
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

</head>
    <body>
    <link href="botones.css" rel="stylesheet">
        <title>Perfil</title>
        <div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
<form action="perfilV2.php" method="POST">
<input type="hidden" name="id" class="form-control" name ="id"value="<?php echo $resultado['id']?>">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Datos del usuario</h4>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" name="nombre" value="<?php echo $resultado['nombre'] ?>" ></div>
                    <div class="col-md-6"><label class="labels">Apellidos</label><input type="text" class="form-control" name="apellido" value="<?php echo $resultado['apellido'] ?>" ></div>
                    <div class="col-md-6"><label class="labels">Email</label><input type="text" class="form-control" name="email" value="<?php echo $resultado['email'] ?>" ></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Número de telefono</label><input type="text" class="form-control" name="telefono" value="<?php echo $resultado['telefono'] ?>" ></div>
                    <div class="col-md-12"><label class="labels">Dirección 1</label><input type="text" class="form-control" name="calle1" value="<?php echo $resultado['calle1'] ?>" ></div>
                    <div class="col-md-12"><label class="labels">Dirección 2</label><input type="text" class="form-control" name="calle2" value="<?php echo $resultado['calle2'] ?>" ></div>
                    <div class="col-md-12"><label class="labels">Código postal</label><input type="text" class="form-control" name="cp" value="<?php echo $resultado['cp'] ?>" ></div>
                    <div class="col-md-12"><label class="labels">Estado</label><input type="text" class="form-control" name="estado" value="<?php echo $resultado['estado'] ?>" ></div>
                    <div class="col-md-12"><label class="labels">Ciudad</label><input type="text" class="form-control" name="ciudad" value="<?php echo $resultado['ciudad'] ?>" ></div>
                    <div class="col-md-12"><label class="labels">Número exterior</label><input type="text" class="form-control" name="num_ext" value="<?php echo $resultado['num_ext'] ?>" ></div>
                    <div class="col-md-12"><label class="labels">Número interior</label><input type="text" class="form-control" name="num_int" value="<?php echo $resultado['num_int'] ?>" ></div>
                </div>
                <div class="mt-5 text-center"><button type="submit" class="btn btn-success">Guardar</button></div> 
                <a href="recuperar.php" style="color:#FF0000;">Modificar clave</a>
            </div>
           
            </form>
        
    </div>
</div>
    </body>
</html>
