<header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</header>

<script type="text/javascript">
setTimeout( function() { window.location.href = "../login_admin.html"; }, 1500);
</script>



<?php
session_start();  /*INICIAR SESSION*/ 
header('Content-Type: text/html; charset=UTF-8');
include 'conex.php';
$id= $_POST['id'];
$email= $_POST['email'];
$password= $_POST['password'];

$validar_usuario = mysqli_query($conex,"SELECT * FROM p_administradores WHERE email='$email' and password='$password' and id='$id' ");

if(mysqli_num_rows($validar_usuario)>0){
    $_SESSION['id_admin']=$id; // GUARDAR LA SESION. El cual es el ID O EMAIL
    header("location:index_admin.php");
    exit;
}else{
    echo "
    <script>
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'Datos incorrectos!!',
        showConfirmButton: false,
      })
    </script>";
    exit;
}
?>

