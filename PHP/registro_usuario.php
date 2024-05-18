<?php

include('conex.php');
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$clave=$_POST['password'];
$clave= hash('sha512',$clave);  //Encriptar la contraseña
$telefono=$_POST['telefono'];
$estado=$_POST['estado'];
$ciudad=$_POST['ciudad'];
$direccion=$_POST['calle'];
$noexterior=$_POST['noex'];
$cp=$_POST['cp'];

$insertar="INSERT INTO p_clientes (nombre, apellido, email, password, estado, ciudad, cp, telefono, calle1, num_ext) values ('$nombre', '$apellidos', '$email', '$clave', '$estado', '$ciudad', '$cp', '$telefono', '$direccion', '$noexterior')";
//Verificar correos no repetidos.
$verificar_correo=mysqli_query($conex,"SELECT * FROM p_clientes WHERE email='$email'");
if(mysqli_num_rows($verificar_correo)>0)
{
  echo '
  <script>
      alert("Este correo ya está registrado,intenta con otro diferente");
      window.location = "registro_usuario.html";
  </script>
  ';
    exit();
}

$resultado=mysqli_query($conex,$insertar)or die("Error de registro");
mysqli_close($conex);
 
if($resultado){
  echo '
        <script>
            alert("Usuario registrado exitosamente");
            window.location = "../login_usuario.html";
        </script>
        ';
}else{
  echo '
        <script>
            alert("Intentalo de nuevo,usuaio no registrado exitosamente");
            window.location = "../registro_usuario.html";
        </script>
        ';
}

?>
