<html>
    <body>
        <form action="prueba_datos_curso.php" method="POST">
Curso: <select name="curso" >
<?php
include 'conex.php';
$result=mysqli_query($conex,"Select id, nombre from p_cursos") or die(mysqli_error($conex));
while($row=mysqli_fetch_array($result))
{
    echo '<option>'.$row['nombre'];
}

?>
</select>
<?php

$id=mysqli_query($conex, "SELECT id FROM p_clientes where id='1'");

$row = mysqli_fetch_array($id);
 $idcliente= $row['id'];
 echo $idcliente;
?>
<input type="hidden" name="idcliente" value="<?php echo $idcliente; ?>">
<input type="submit" value="Submit">
</form>

    </body>
</html>