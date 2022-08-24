<?php

?> 


<!DOCTYPE html>

<html>
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style/css/estilos.css">
<link rel="stylesheet" type="text/css" href="style/css/footer.css">

<title><?php echo $data["titulo"]; ?></title>
</head>


<body>
    
      
<div class="jumbotron" style="background-color: #F8F8F8;" >                   
              
              <div class="container text-center p-4">
                  <a href="#" style="text-decoration: none;">
                  <h2  style="color: black;"><?php echo $data["titulo"]; ?> </h2>
              </a>
           

<br />
<a href="index.php?c=vehiculos&a=nuevo"  type="button" class="btn btn-primary" style="background-color:#2E47FE; border:none;">AGREGAR</a>
<br />
<br />

<table border = "1"  width ="80%"  style="text-align:center;">

<thead>

<tr>
<th>Placa</th>
<th>Marca</th>
<th>Modelo</th>
<th>Año</th>
<th>Color</th>
<th>Editar</th>
<th>Eliminar</th>
</tr>
</thead>

<tbody>

<?php foreach($data["vehiculos"] as $dato){
    echo "<tr>";
    echo "<td>" .$dato["placa"]."</td>";
    echo "<td>" .$dato["marca"]."</td>";
    echo "<td>" .$dato["modelo"]."</td>";
    echo "<td>" .$dato["anio"]."</td>";
    echo "<td>" .$dato["color"]."</td>";
    echo "<td><a  href='index.php?c=vehiculos&a=modificar&id=".$dato["id"]."' style=text-decoration:none>Modificar📋</a></td>";
    echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."' style=text-decoration:none>Eliminar❌</a></td>";
    echo "</tr>";
}

?>


 </tbody>

</table>
   </div>     
          </div>

</body>



<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Siguenos en nuestras redes sociales</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com/" class="me-4 text-reset">
        <img src="style/iconos/facebook.png" style="width:30px" class="rounded-pill">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://www.google.com/" class="me-4 text-reset">
      <img src="style/iconos/google.png" style="width:30px" class="rounded-pill">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.instagram.com/" class="me-4 text-reset">
      <img src="style/iconos/instagram.png" style="width:30px" class="rounded-pill">
        <i class="fab fa-instagram"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>VEHICULOS 🚗
          </h6>
          <p>
            Esta página contiene los vehículos con un CRUD.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            MI CUENTA
          </h6>
          <p>
            <a href="#" class="text-reset">Inicio</a>
          </p>
          <p>
            <a href="#" class="text-reset">Vehiculo</a>
          </p>
          <p>
            <a href="#" class="text-reset">Admin</a>
          </p>
        
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            LEGAL
          </h6>
          <p>
            <a href="#" class="text-reset">Política de privacidad</a>
          </p>
          <p>
            <a href="#" class="text-reset">Términos de uso</a>
          </p>
          <p>
            <a href="#" class="text-reset">Mapa del sitio</a>
          </p>
          <p>
            <a href="#" class="text-reset">Ayuda</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contacto
          </h6>
          <p><i class="fas fa-home me-3"></i> Calle Ciclón #483 1A, Col. Barrio de Tlaxcala</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            am0036508@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i>845 106 8864</p>
          <p><i class="fas fa-print me-3"></i>444 862 0510</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    Todos los derechos reservados © 2021 Copyright
    <a class="text-reset fw-bold" href="a.php">ROADCAR S.L.P MX. </a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


</html>