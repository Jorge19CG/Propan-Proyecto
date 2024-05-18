<?php
include 'conex.php';
//obtner variables de antes
$curso = $_POST['curso'];

$idcliente = $_POST['idcliente'];

//select obteniendo el id del curso
$idcurso=mysqli_query($conex, "SELECT id FROM p_cursos where nombre='$curso'");

$row = mysqli_fetch_array($idcurso);
 $idcur= $row['id'];

 $insert = "INSERT INTO p_registro_cursos (cne_id, cro_id)
 VALUES ('$idcliente', '$idcur')";
 if (mysqli_query($conex, $insert)) {
    echo '<script>
    alert("Inscrito correctamente al curso");
    window.location = "inicio_login.php";
</script>';
exit;
  } else {
    echo '<script>
        alert("Usuario ya inscrito al curso");
        window.location = "inicio_login.php";
    </script>';
    exit;
  }
?>