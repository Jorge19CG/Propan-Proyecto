
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
	NuevoProducto($_POST['nombre'],$_POST['categoria'], $_POST['peso'], $_POST['unidis'], $_POST['precio'],$_POST['descripcion']  ,$_SESSION['id_admin']);

	function NuevoProducto($nombre, $categoria,$peso ,$unidadesdispo,$precio,$descrip,$amo_id)
	{
		include 'conex.php';
		$nom_archivo=$_FILES['imagen']['name'];
		$rutaguardar="../Productos/".$nom_archivo;
		$archivo=$_FILES['imagen']['tmp_name'];
		$subirarchivo=move_uploaded_file($archivo,$rutaguardar);
		$sentencia= "INSERT INTO p_articulos (nombre,categoria,peso,unidades_disponibles,precio,amo_id,descripcion,imagen) VALUES ('".$nombre."', '".$categoria."', '".$peso."', '".$unidadesdispo."', '".$precio."', '".$amo_id."', '".$descrip."', '".$rutaguardar."') ";
		$conex->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conex));
		echo "
		<script>
        	Swal.fire({
			position: 'center',
			icon: 'success',
			title: 'Se ha agregado el producto!!',
			showConfirmButton: false,
		  })
    	</script>";
	}
?>
<script type="text/javascript">
	setTimeout( function() { window.location.href = "Adminproductos.php"; }, 1000);
</script>

