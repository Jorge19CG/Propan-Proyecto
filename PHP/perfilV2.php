<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</header>

<?php
	ModificarPerfil($_POST['id'],$_POST['nombre'], $_POST['apellido'],$_POST['email'],$_POST['telefono'],$_POST['ciudad'],$_POST['estado'],
    $_POST['cp'],$_POST['calle1'],$_POST['num_ext'],$_POST['num_int'],$_POST['calle2']);
	function ModificarPerfil($id, $nombre,$apellido,$email,$telefono,$ciudad,$estado,$cp,$calle1,$num_ext,$num_int,$calle2)
	{
		include 'conex.php';
		$sentencia="UPDATE p_clientes SET nombre='$nombre', apellido='$apellido',email='$email', 
        telefono='$telefono',ciudad='$ciudad',estado='$estado',
        cp='$cp',calle1='$calle1',calle2='$calle2',
        num_int='$num_int',num_ext='$num_ext' WHERE id = '$id'";
		$conex->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conex));
        echo "
		<script>
        	Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Se ha modificado el perfil!!',
			showConfirmButton: false,
		  })
    	</script>";
	}
	
?>

<script type="text/javascript">
setTimeout( function() { window.location.href = "inicio_login.php"; }, 1200);
</script>






