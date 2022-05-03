<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONDUCIMOS</title>
    <link rel="shortcut icon" type="imagelx-icon" href="img/favicon.png">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="shadow-sm p-3 mb-5 bg-body rounded container-fluid">
        <h1><a class="navbar-brand" href="index.html"><img src="img/Logo.png" class="logo"></a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="flex-row-reverse bd-highlight collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="lent nav-item dropdown">
              <a class="btn btn-outline-dark nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                INICIO
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="index.html">Inicio</a></li>
                <li><a class="dropdown-item" href="vehiculos.html">Vehículos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Dirección</a></li>
              </ul>
            <li class="nav-item">
              <a class="nav-link active btn btn-outline-dark" aria-current="page" href="vehiculos.html">VEHÍCULOS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active btn btn-outline-dark" aria-current="page" href="empresa.html">NUESTRA EMPRESA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active btn btn-outline-dark" aria-current="page" href="formulario.php">CONTÁCTENOS</a>
            </li>
            <li class="nav-item">
              <a target="_blank" class="nav-link active btn btn-outline-dark" aria-current="page" href="https://www.psepagos.co/PSEHostingUI/ShowTicketOffice.aspx?ID=8624">PAGOS<img class="pse" src="img/pse.png" alt=""></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <section>
    <div class="sn mb-3">
      <div class="row g-0">
        <div class="col-md-6">
            <h2>Información <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
              <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            </svg> </h2>
            <h3>Medios de comunicación</h3><br>
            <h3>PBX: 448 4278</h3>
            <h3>Cel: 3174415271</h3>
            <h3>Email: servicioalcliente@conducimos.com.co</h3>
            <h3>Instagram: @cea_conducimos</h3>
            <h3>Facebook: CEA Conducimos S.A.S</h3>
        </div>
        <div class="col-md-6">
          <div class="card-body">
            <form class="form_contact action=" method="post" name="contacto" id ="contacto" >
              <h2>Envia un mensaje</h2>
              <div class="user_info">
                  <label for="names">Nombres</label>
                  <input type="text" name="name">
      
                  <label for="phone">Telefono / Celular</label>
                  <input type="number" name="celular">
      
                  <label for="e-mail">Correo electronico</label>
                  <input name="email" type="text">

                  <label for="mensaje">Asunto</label>
                  <textarea name="asunto"></textarea>
      
                  <label for="mensaje">Mensaje</label>
                  <textarea name="msg"></textarea>
      
                  <input name="enviar" type="submit" class="nav-link active btn btn-outline-dark">
              </div>
          </form>
          <?php
          include("correo.php")
          ?>
          </div>
        </div>
      </div>
    </div>
  </section>
 </section>
<section class="maps">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2700134583724!2d-75.60397688529413!3d6.228088128255006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4429eb378c804f%3A0x17a2e3ad2525f5f5!2sCentro%20de%20Ense%C3%B1anza%20Automovil%C3%ADstica%20Conducimos!5e0!3m2!1ses!2sco!4v1634242663983!5m2!1ses!2sco" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<footer class="color">
  <div class="container">
    <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="cen">
               <a href="https://www.instagram.com/cea_conducimos/"><span class="redes"><img class="logo1" src="img/instagram.png" alt=""></span></a>
               <a href="https://www.facebook.com/CEA-Conducimos-SAS-104583014495564"><span class="redes"><img class="logo1" src="img/faceboock.png" alt=""></span></a>
               <a href="https://twitter.com/conducimossas"><span class="redes"><img class="logo1" src="img/twitter.png" alt=""></span></a>
              </div>
               <h4 class="copy">© 2014 conducimos.com.co. <br> <a target="_blank" href="img/Politica de Tratamiento de Datos Personales.pdf">POLÍTICA PARA EL TRATAMIENTO DE DATOS PERSONALES</a></h4>
             </div>
             <div class="col">
              <div class=" desc-box">
                  <div class="fodn">
                      <div class="card-text">
                          <div class="row">
                              <div class="col">
                                <div class="cen1 card-title"><img class="redes" src="img/logoAlcaldia.png" alt=""></a></h2></div>
                                <h4 class="copy">Resolución No 01325 de 2014 de la secretaria de educación de Medellín</h4>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
             <div class="col-md-4 col-sm-6 col-xs-12">
               <ul class="address">
                <img class="cen2 redes" src="img/logoTransporte.png" alt="">  
                 <h4 class="copy">Resolución No 1240 del 15 de mayo de 2014 del ministerio de transporte</h4>
                </ul>
             </div>
         </div> 
     </div>
 </footer>
</body>
</html>