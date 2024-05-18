
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

session_start();
if(!isset($_SESSION['usuario'])){
     echo '<div class="alert alert-danger" role="alert">Acceso denegado.<BR><a href="login_admin.php">Iniciar Sesion</a></div>';
    session_destroy(); 
    die();
}
?>

<header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</header>

<script type="text/javascript">
	setTimeout( function() { window.location.href = "login_usuario.php"; }, 1000);
</script>


<?php
 

header('Content-Type: text/html; charset=UTF-8');

include 'conex.php';

$email= $_POST['email'];
$contraseña= $_POST['contraseña'];
$contraseña= hash('sha512',$contraseña);
$nuevacontra= $_POST['nuevacontra'];
$nuevacontra= hash('sha512',$nuevacontra);
$validar_usuario = mysqli_query($conex,"SELECT * FROM p_clientes WHERE email='$email' and password = '$contraseña'");

if(mysqli_num_rows($validar_usuario)>0){
      $nuevacontra = mysqli_query($conex,"UPDATE p_clientes SET password = '$nuevacontra' WHERE email ='$email'");
      echo "
		<script>
        	Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Se ha cambiado tu clave!!',
			showConfirmButton: false,
		  })
    	</script>";
    exit;
}else{
    echo "
		<script>
        	Swal.fire({
			position: 'center',
			icon: 'error',
			title: 'Clave o Correo incorrecto',
			showConfirmButton: false,
            
		  })
    	</script>";
    exit;
}
?>
