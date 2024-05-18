<?php
include 'conex.php';
session_start();
if(!isset($_SESSION['usuario'])){
    echo '
    <script>
        alert("Por favor debes iniciar sesion");
        window.location = "../login_usuario.html";
    </script>
    ';
    session_destroy(); 
    die();
}
$correo= $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="../CSS/estilo_inicio.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Propan de Morelos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="inicio_login.php"><img src="../encabezadoimg/1.png" /></a></h1>
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#Inicio">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#Cursos">Cursos</a></li>
          <li><a class="nav-link scrollto " href="#Historia">Nuestra Historia</a></li>
          <li><a class="nav-link scrollto" href="#sucursales">Sucursales</a></li>
          <li><a class="nav-link scrollto" href="#preguntas">Preguntas Frecuentes</a></li>
		  <li><a class="nav-link scrollto" href="Productos.php">Tienda</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        <a href="https://www.facebook.com/PROPAN.MORELOS" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/propan.de.morelos/" target="_blank"class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
      <div class="usuario">
<a>
      <style>
      .button2 {background-color: #3a377c;color:white;border: none;}
      </style>

      <form action="perfil.php" method="post">
    <input type="hidden" name="nombre" value="<?php echo $correo; ?>"/>
    <button type="submit" class="button button2"><i class="bi bi-person-circle"></i></button>
    </form></a>
        <a href="cerrarsesion_us.php"  class="logout"><i class="bi bi-box-arrow-in-right"></i></a>
      </div>

    </div>
  </header><!-- Fin Header -->

<!-- ======= Inicio ======= -->
<section id="Inicio" class="Inicio section-bg">
  <div class="container">
    <img src="../IndexImagenes/Inde.jpg" class="inde">
    <br>
    <br>
  </div>
<!-- ======= Carrusel ======= -->
  <div  id="carouselExampleControls"  class="carousel slide" data-ride="carousel" style="width:30%;height:20%">
    <div class="carousel-inner">
      
      <?php
  include('conex1.php');
  $link=Conectarse();
  $i="1";
  $idm = mysqli_query($link, "Select MAX(id) from p_imagenes");
  $idm = $idm -> fetch_array();
  $quantity = intval($idm[0]);
    while($i <= $quantity){
      $idv = mysqli_query($link, "Select id from p_imagenes where id='$i'");
      $idv = $idv -> fetch_array();
      $valida = intval($idv[0]);
      $promov=mysqli_query($link, "Select categoria from p_imagenes where categoria='carrusel' AND id='$i'");
      $promov = $promov -> fetch_array();
      $promovalida = strval($promov[0]);
    if(($i==$valida)&&($promovalida=="carrusel")){
      $result=mysqli_query($link, "Select * from p_imagenes where id='$i'" );
      $row = mysqli_fetch_array($result);
  ?>
  <div class="carousel-item">
        <img src="../ImagenesInicio/<?php echo $row["imagen"]; ?>" class="d-block w-100" width="200" height="500">
  </div>

  <?php
  }
  $i++;
  }
  ?>
  <div class="carousel-item active">
        <img src="../IndexImagenes/aca.JPG" class="d-block w-100" width="200" height="500">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <!-- ======= Fin Carrusel ======= -->
  <br>
    <br>
  <table align="center">
    <tr>
        <td colspan="3" align="center">
          <img src="../IndexImagenes/procutodesta.jpg">
        </td>
    </tr>
    <tr>

    <?php  
            $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '1' "); ?>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
              <td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>" width="300" ></td>
                <?php } ?>
                <?php  
            $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '3' "); ?>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
              <td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>" width="300" ></td>
                <?php } ?>

                <?php   
            $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '4' "); ?>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
              <td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>" width="300" ></td>
                <?php } ?>
    </tr>
  <tr>
      <td colspan="3" align="center">
          <img src="../IndexImagenes/recetas.jpg" >
         </td>
  </tr>
  
  <tr>
      <td>
          <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPROPAN.MORELOS%2Fvideos%2F616676715635457%2F&show_text=false&width=560&t=0"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>    
      </td>
      <td >
          <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPROPAN.MORELOS%2Fvideos%2F703145823583943%2F&show_text=false&width=560&t=0" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>    
      </td>
      <td>
          <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FPROPAN.MORELOS%2Fvideos%2F2349876078653939%2F&show_text=false&width=560&t=0"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
      </td>
  </tr>
  <tr>
      <td colspan="3" align="center">
          <img src="../IndexImagenes/lideres.jpg" >
      </td>
  </tr>
         </table>
</section><!-- Fin de Inicio -->
    
    <!-- ======= Cursos ======= -->
    <section id="Cursos" class="Cursos ">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Cursos</h2>
          <p>La empresa ofrece una amplia varieda de cursos</p>
        </div>

        <?php  
            $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '5' "); ?>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
              <td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>" ></td>
                <?php } ?>
      </div>
      <br>
      <br>
      <table width="80%">
        <tr>
          <td>
          <p align="center"><iframe width="560" height="315" src="https://www.youtube.com/embed/ArCHBIAiTpY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
          </td>
          <td>


          <form action="insert_datos_curso.php" method="POST">
Curso: <select name="curso" >
<?php
$result=mysqli_query($conex,"Select id, nombre from p_cursos") or die(mysqli_error($conex));
while($row=mysqli_fetch_array($result))
{
    echo '<option>'.$row['nombre'];
}

?>
</select>
<?php

$id=mysqli_query($conex, "SELECT id FROM p_clientes where email='$correo'");

$row = mysqli_fetch_array($id);
 $idcliente= $row['id'];
?>
<input type="hidden" name="idcliente" value="<?php echo $idcliente; ?>">
<input type="submit" value="Inscribirse al curso">
</form>

          </td>
        </tr>
      </table>
      
      
    </section><!-- Fin de Cursos -->

    <!-- ======= Nuestra Historia Section ======= -->
    <section id="Historia" class="Historia section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Nuestra Historia</h2>
         </div>

        <h1 align="center"><font face="Arial" size="5px" color="3a377c">
          ORGANIZACIÓN DE ORIGEN FAMILIAR 100 % MEXICANA, FUNDADA EN 1996 CON UNA
          FILOSOFÍA CLARA ORIENTADOS AL SERVICIO DE CADA UNO DE NUESTROS CLIENTES, ACERCANDO
          SOLUCIONES INTEGRALES QUE SUMEN AL CRECIMIENTO SUSTENTABLE DE CADA UNO DE
          NUESTROS CLIENTES.
          AL DÍA DE HOY ORGULLOSAMENTE LIDERES EN MORELOS BUSCANDO SER UN EMPRESA
          SOCIALMENTE RESPONSABLE E INSTITUCIONAL.
      </font><br><br><br></h1>

  <table align="center"><tr><td><iframe align="middle" width="560" height="315" src="https://www.youtube.com/embed/McgMhT7T5OU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td></tr></table>
  <br><br><table align="center">
    <tr>
    <?php 
            $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '10' "); ?>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
              <td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>" ></td>
                <?php } ?>
                <?php  
            $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '11' "); ?>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
              <td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>"  ></td>
                <?php } ?>
                <?php  
            $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '12' "); ?>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
              <td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>"  ></td>
                <?php } ?>
    </tr>
</table>

      </div>
    </section><!-- End Nuestra Historia Section -->

    <!-- ======= pdo Section ======= -->
    <section id="pdo" class="pdo">
      <div class="container">

        <div class="row" data-aos="zoom-in">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>¿Quieres conocer nuestros productos?</h3>
            <p> Contamos con una gran variedad de productos para respostería y panadería; contamos con las mejores marcas a los mejores precios.</p>
          </div>
          <div class="col-lg-3 pdo-btn-container text-center">
            <a class="pdo-btn align-middle" href="Productos.php">Ir a la tienda</a>
          </div>
        </div>

      </div>
    </section><!-- End pdo Section -->

    <!-- ======= sucursales Section ======= -->
    <section id="sucursales" class="sucursales ">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Sucursales</h2>
        </div>
        <table align="center" width="80%">

          <tr>
          <?php   
            $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '6' "); ?>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
              <td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>" width="840"></td>
                <?php } ?>
          <td>
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d483254.62429144554!2d-98.930352!3d18.86814!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2918f00fd1bd8120!2sPROPAN!5e0!3m2!1ses!2sus!4v1647049231273!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
              </iframe>
          </td>
      </tr>
      <tr>
      <?php   
            $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '7' "); ?>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
              <td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>" width="840" ></td>
                <?php } ?>           
          <td><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d483380.8255734836!2d-98.949511!3d18.824309!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x296dd21e795b269a!2sPROPAN%20CENTRO!5e0!3m2!1ses!2sus!4v1647049267376!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></td>
      </tr>
      <tr>
      <?php   
            $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '8' "); ?>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
              <td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>" width="840" ></td>
                <?php } ?>
          <td>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.5643883430903!2d-98.7614773846206!3d18.503380674527865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cef3f6e8996ae9%3A0xeb17816d57e98c84!2sAv.%20Zaragoza%2C%20Florida%2C%2062954%20Axochiapan%2C%20Mor.%2C%20M%C3%A9xico!5e0!3m2!1ses!2sus!4v1647049742843!5m2!1ses!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
          </iframe>
          </td>
      </tr>

      <tr>
      <?php   
            $busqueda=mysqli_query($conex,"SELECT * FROM p_imagenes WHERE id = '9' "); ?>
            <div class="container_card">
                <?php while ($resultado = mysqli_fetch_assoc($busqueda)){
                 ?>
              <td><img src="../ImagenesInicio/<?php echo $resultado["imagen"];?>" width="840" ></td>
                <?php } ?>
          <td>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.182186591858!2d-99.21243258406008!3d18.92332836166867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cddf9789696065%3A0x28a57826c49bc502!2sAv.%20Plan%20de%20Ayala%20308%2C%20Cuauhnahuac%2C%2062430%20Cuernavaca%2C%20Mor.!5e0!3m2!1ses-419!2smx!4v1647111748487!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            </iframe>
          </td>
      </tr>
  </table>
          </div>

      </div>
    </section><!-- End sucursales Section -->

    <!-- ======= Preguntas Frecuentes ======= -->
    <section id="preguntas" class="preguntas section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Preguntas Frecuentes</h2>
        </div>

        <ul class="preguntas-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#preguntas1">¿Hace envios a todo México?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="preguntas1" class="collapse" data-bs-parent=".preguntas-list">
              <p>
                Si, hacemos envios a toda la republica.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#preguntas2" class="collapsed question">¿Que metodos de pago aceptan?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="preguntas2" class="collapse" data-bs-parent=".preguntas-list">
              <p>
                VISA,MASTERCAD,AMAERICAN EXPRESS,DISCOVER,Paypal.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#preguntas3" class="collapsed question">¿En cuanto tiempo tendre mi producto?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="preguntas3" class="collapse" data-bs-parent=".preguntas-list">
              <p>
                Los tiempos de entrega pueden llegar a variar dependiendo la zona en la que realices tu compra.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#preguntas4" class="collapsed question">¿Que horario se dan los cursos?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="preguntas4" class="collapse" data-bs-parent=".preguntas-list">
              <p>
                Los horarios dependerian de cual curso tomar, debera ponerse en contacto para asignar su horario.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#preguntas5" class="collapsed question">¿Tienen una póliza de garantía?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="preguntas5" class="collapse" data-bs-parent=".preguntas-list">
              <p>
                Para cualquier duda referente a uno o más problemas con nuestros productos ofrecidos recomendamos ponerse en contacto directo con nosotros a través de los medios disponibles en nuestro apartado de contacto situado en nuestro pie de pagina.
              </p>
            </div>
          </li>
        </ul>

      </div>
    </section><!-- End Preguntas Frecuentes -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="footer-info">
              <h3>Propan de Morelos</h3>
              <p>
                Bodega 33, Nave B, Tetelcingo, 62751 Cuautla, Mor. <br>
                Morelos, México<br><br>
                <strong>Teléfono:</strong> 735 353 6168<br>
                <strong>Email:</strong> dist.propan@hotmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/PROPAN.MORELOS" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/propan.de.morelos/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col footer-links">
            <h4>Legal</h4>
            <ul>
              <script type="text/javascript">
                function popUp(URL) {
                    window.open(URL, 'Terminos y Condiciones', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=900,height=700,left = 390,top = 50');
                }
                </script>
              <li><i class="bx bx-chevron-right"></i> <a href="javascript:popUp('../term_y_cond.html')">Terminos y condiciones</a></li>
              <script type="text/javascript">
                function popUp(URL) {
                    window.open(URL, 'Aviso de Privacidad', 'toolbar=0,scrollbars=0,location=0,statusbar=0,menubar=0,resizable=1,width=900,height=700,left = 390,top = 50');
                }
                </script>
              <li><i class="bx bx-chevron-right"></i> <a href="javascript:popUp('../aviso_priv.html')">Aviso de Privacidad</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Propan de Morelos</span></strong>
      </div>
    </div>
  </footer><!-- Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>