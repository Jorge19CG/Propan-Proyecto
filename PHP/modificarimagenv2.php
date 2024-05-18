
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
	$id=$_POST['id'];
	if($_FILES["imagen"]["error"]>0)
	{
		
	}
	else
	{
		$nom_archivo=$_FILES['imagen']['name'];
		$rutaguardar="../ImagenesInicio/".$nom_archivo;
		$archivo=$_FILES['imagen']['tmp_name'];
		$subirarchivo=move_uploaded_file($archivo,$rutaguardar);
		include 'conex.php';
		$consulta_img="UPDATE p_imagenes SET imagen='".$rutaguardar."' WHERE id='".$_POST['id']."'  ";
		$conex->query($consulta_img) or die ("Error al subir imagen".mysqli_error($conex));
        echo "
		<script>
        	Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Se ha modificado la imagen!!',
			showConfirmButton: false,
		  })
    	</script>";
	}
	
?>

<script type="text/javascript">
setTimeout( function() { window.location.href = "AdminImagenes.php"; }, 1000);
</script>



