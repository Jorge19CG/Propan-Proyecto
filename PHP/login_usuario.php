<header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</header>

<script type="text/javascript">
setTimeout( function() { window.location.href = "../login_usuario.html"; }, 1500);
</script>

<?php
session_start();  /*INICIAR SESSION*/ 
header('Content-Type: text/html; charset=UTF-8');
include 'conex.php';

$email= $_POST['email'];
$password= $_POST['password'];
$password= hash('sha512',$password);

$validar_usuario = mysqli_query($conex,"SELECT * FROM p_clientes WHERE email='$email' and password='$password'");

if(mysqli_num_rows($validar_usuario)>0){
    $_SESSION['usuario']=$email; // GUARDAR LA SESION. El cual es el ID O EMAIL
    header("location:inicio_login.php");
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