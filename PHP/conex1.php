<?php  // Conectarse.php
function Conectarse(){

if(!($link=mysqli_connect("proydweb.com", "proydweb_u_p2022", "s0p0rt32@22","proydweb_p2022"))){
echo "Error conectando a la base de datos.";
exit();
}

return $link;
}

?>