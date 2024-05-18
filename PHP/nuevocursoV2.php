<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

session_start();
if(!isset($_SESSION['id_admin'])){
     echo '<div class="alert alert-danger" role="alert">Acceso denegado.<BR><a href="login_admin.php">Iniciar Sesion</a></div>';
    session_destroy(); 
    die();
}
?>


<header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</header>



<?php
	NuevoProducto($_POST['nombre'],$_POST['descripcion']);

	function NuevoProducto($nombre,$descrip)
	{
		include 'conex.php';
		$sentencia= "INSERT INTO p_cursos (nombre,descripcion) VALUES ('".$nombre."','".$descrip."') ";
		$conex->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conex));
	}
?>

<script>
        	Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Se ha agregado el nuevo curso!!',
			showConfirmButton: false,
		  })
    	</script>";

<script type="text/javascript">
	setTimeout( function() { window.location.href = "Admincursos.php"; }, 1000);
</script>
