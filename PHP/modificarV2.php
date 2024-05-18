
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
	ModificarProducto($_POST['id'],$_POST['nombre'],$_POST['categoria'], $_POST['peso'], $_POST['unidades_disponibles'], $_POST['precio'], $_SESSION['id_admin'], $_POST['descripcion'] );
	function ModificarProducto($id, $nombre, $categoria,$peso ,$unidadesdispo,$precio,$amo_id,$descrip)
	{
		include 'conex.php';
		$sentencia="UPDATE p_articulos SET id='".$id."', nombre='".$nombre."', descripcion='".$descrip."' , categoria='".$categoria."' , precio='".$precio."' , peso='".$peso."' , unidades_disponibles='".$unidadesdispo."' , amo_id='".$amo_id."'WHERE id='".$id."' ";
		$conex->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conex));
        echo "
		<script>
        	Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Se ha modificado el producto!!',
			showConfirmButton: false,
		  })
    	</script>";
	}

	if($_FILES["imagen"]["error"]>0)
	{
		
	}
	else
	{
		$nom_archivo=$_FILES['imagen']['name'];
		$rutaguardar="../Productos/".$nom_archivo;
		$archivo=$_FILES['imagen']['tmp_name'];
		$subirarchivo=move_uploaded_file($archivo,$rutaguardar);
		include 'conex.php';
		$consulta_img="UPDATE p_articulos SET imagen='".$rutaguardar."' WHERE id='".$_POST['id']."'  ";
		$conex->query($consulta_img) or die ("Error al subir imagen".mysqli_error($conex));
	}
	
?>

<script type="text/javascript">
setTimeout( function() { window.location.href = "Adminproductos.php"; }, 1200);
</script>




