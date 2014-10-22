<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      #map_canvas { width: 100% }
    </style>
    <script type="text/javascript"
      src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAYbvMq01gJdBRvJwNWlh2yQJjS5TmgNbc&sensor=SET_TO_TRUE_OR_FALSE">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          scrollwheel: false,
          navigationControl: false,
            mapTypeControl: false,
            scaleControl: false,
            draggable: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true,
          center: new google.maps.LatLng(19.455254, -99.217123),
          zoom: 16,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
    
       var marker = new google.maps.Marker({
      position: new google.maps.LatLng(19.455254, -99.217123),
      map: map,
      title: 'PANASE!'
        });

       }
       google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PANASE</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>includes/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>includes/css/thumbnail-gallery.css" rel="stylesheet" type="text/css">

    <!-- Retina.js - Load first for faster HQ mobile images. -->

    <!-- Font Awesome -->
    <link href="<?=base_url()?>includes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Default Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>



    <!-- Plugin CSS -->
    <link href="<?=base_url()?>includes/css/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>includes/css/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>includes/css/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>includes/css/plugins/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>includes/css/plugins/jquery.fs.wallpaper.css" rel="stylesheet" type="text/css">


    <!-- Style Switcher CSS - Demo Purposes Only! -->
    
    <link href="<?=base_url()?>includes/demo/style-switcher.css" rel="stylesheet">
    <link href="<?=base_url()?>includes/css/custom.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css/common.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css/style.css" />
        <link id="changeable-colors" rel="stylesheet" href="<?=base_url()?>includes/css/sty.css">

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>


    <![endif]-->
    <style>
    


    #slides {
    }

    #slides .slidesjs-navigation {
      margin-top:5px;
    }

    a.slidesjs-next,
    a.slidesjs-previous,
    a.slidesjs-play,
    a.slidesjs-stop {
      background-image: url(includes/img/btns-next-prev.png);
      background-repeat: no-repeat;
      display:block;
      width:12px;
      height:18px;
      overflow: hidden;
      text-indent: -9999px;
      float: left;
      margin-right:5px;
    }

    a.slidesjs-next {
      margin-right:10px;
      background-position: -12px 0;
    }

    a:hover.slidesjs-next {
      background-position: -12px -18px;
    }

    a.slidesjs-previous {
      background-position: 0 0;
    }

    a:hover.slidesjs-previous {
      background-position: 0 -18px;
    }

    a.slidesjs-play {
      width:15px;
      background-position: -25px 0;
    }

    a:hover.slidesjs-play {
      background-position: -25px -18px;
    }

    a.slidesjs-stop {
      width:18px;
      background-position: -41px 0;
    }

    a:hover.slidesjs-stop {
      background-position: -41px -18px;
    }

    .slidesjs-pagination {
      margin: 7px 0 0;
      float: right;
      list-style: none;
    }

    .slidesjs-pagination li {
      float: left;
      margin: 0 1px;
    }

    .slidesjs-pagination li a {
      display: block;
      width: 13px;
      height: 0;
      padding-top: 13px;
      background-image: url(includes/img/pagination.png);
      background-position: 0 0;
      float: left;
      overflow: hidden;
    }

    .slidesjs-pagination li a.active,
    .slidesjs-pagination li a:hover.active {
      background-position: 0 -13px
    }

    .slidesjs-pagination li a:hover {
      background-position: 0 -26px
    }

    #slides a:link,
    #slides a:visited {
      color: #333
    }

    #slides a:hover,
    #slides a:active {
      color: #9e2020
    }

    .navbar {
      overflow: hidden
    }
  </style>
  <!-- End SlidesJS Optional-->

  <!-- SlidesJS Required: These styles are required if you'd like a responsive slideshow -->
  <style>
    #slides {
      display: none
    }

    .container {
    }

    /* For tablets & smart phones */
    @media (max-width: 767px) {
      
      .container {
      }
    }

    /* For smartphones */
    @media (max-width: 480px) {
      .container {
      }
    }

    /* For smaller displays like laptops */
    @media (min-width: 768px) and (max-width: 979px) {
      .container {
      }
    }

    /* For larger displays */
    @media (min-width: 1200px) {
      .container {
      }
    }
  </style>


</head>

<!-- Alternate Body Classes: .modern and .vintage -->

<body id="page-top" onload="initialize()">

    <!-- Navigation -->
    <!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->
    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand img-responsive-cont" href="#page-top">
                    <img src="<?=base_url()?>includes/img/logo.png" class="img-responsive" alt="">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="#empresa">Empresa</a>
                    </li>
                    <li>
                        <a href="#personal">Personal</a>
                    </li>
                    <li>
                        <a href="#clientes">Clientes</a>
                    </li>
                     <li>
                        <a href="#servicios">Servicios especiales</a>
                    </li>
                    <li>
                        <a href="#consejos">Blog</a>
                    </li>
                    <li>
                        <a href="#contacto">Contacto</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <header style="background-image: url('<?=base_url()?>includes/img/panase/equipo59.jpg');">
        <div class="intro-content">
            <img src="<?=base_url()?>includes/img/panase-w.png" class="img-responsive img-centered" alt="">
            <div class="brand-name">PANASE</div>
            <hr class="colored">
            <div class="brand-name-subtext">PANAMERICANA DE SEGURIDAD PRIVADA</div>

        </div>
        <div class="scroll-down">
            <a class="btn" href="#empresa"><i class="fa fa-angle-down fa-fw"></i></a>
        </div>
    </header>

    <section id="empresa">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>“Nuestro trabajo es la seguridad, tu tranquilidad es nuestra misión”</h1>
                    
                    <hr class="colored">
                </div>
            </div>
            <div class="row text-center content-row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="about-content">
                         <img src="<?=base_url()?>includes/img/panase-w.png" class="img-responsive img-centered" alt="">
                    </div>
                </div>

                <div class="col-md-10 col-md-offset-1">
                    <div class="about-content">
                        <p><b>PANAMERICANA DE SEGURIDAD PRIVADA, S.A. DE C.V.</b>; es una empresa legalmente constituida en el 2001 y registrada con la finalidad de prestar servicios de seguridad para personas físicas y morales. Se trata de una empresa 100% mexicana que trabaja las 24 horas del día los 365 días del año con prestación de servicios en el Distrito Federal, Estado de México, Oaxaca, Morelos y Querétaro. </p>
                        <p>Nuestra amplia experiencia dentro del ramo de la seguridad privada nos proporciona la confianza de brindarle el mejor servicio diseñado para adaptarse a sus necesidades de seguridad, brindándole de esta manera la garantía de un servicio profesional.</p>
                        <p>Nuestro personal está altamente capacitado y entrenado para que responda prudente e inteligentemente al resguardar la seguridad de las personas, que tenga la capacidad de observación a efecto de registrar todo detalle de lo acontecido sabiendo salvaguardar el lugar de los hechos para evitar la destrucción de la evidencia, además de estar capacitados para solicitar primeros auxilios y apoyos oficiales.</p>
                    </div>
                </div>



            </div>
            
            
        </div>
      <!--   <div class="img-1">
                <img src="<?=base_url()?>includes/img/panase/1.png" class="img-responsive img-centered" alt="">
            </div> -->
            
    </section>


    <section class="pricing" style="background-image: url('<?=base_url()?>includes/img/panase/bg223.jpg')">
        <div class="container">

           <div class="space-1">
               
           </div>
        </div>
    </section>





    <section id="valores1" class="bg-gray">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <h1><b>Misión</b></h1>
                    <p>“Somos una empresa de seguridad privada que busca lograr la tranquilidad del cliente a través de una atención personalizada, caracterizada por su dinamismo y solución acertada a sus necesidades, tanto a nivel preventivo como correctivo.”</p>
                </div>
                <div class="col-md-6">
                    <h1><b>Visión</b></h1>
                    <p>“Somos una empresa de seguridad privada que busca lograr la tranquilidad del cliente a través de una atención personalizada, caracterizada por su dinamismo y solución acertada a sus necesidades, tanto a nivel preventivo como correctivo.”</p>
                </div>
            </div>
        </div>
    </section>

        <section class="pricing" style="background-image: url('<?=base_url()?>includes/img/panase/comandante1.jpg')">
        <div class="container">

           <div class="space-1">
                <center>
                <p></p>
                <br>
               "Personal altamente capacitado y entrenado para responder prudente e inteligentemente al resguardar la seguridad de las personas"
                 

                </center>   
           </div>
        </div>
    </section>

  


    

<section id="valores" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>VALORES</h2>
                    <hr class="colored">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modalw">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                Conocer la importancia e implicación de sus funciones, respondiendo ante sus aciertos y errores, impulsando y contribuyendo con la cadena de actividades que permita construir  el servicio que ofrece la empresa.
                            </div>
                        </div>
                        <img src="<?=base_url()?>includes/img/panase/res.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>RESPONSABILIDAD</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modalw">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                De vital importancia para garantizar la seguridad de los clientes, inmuebles o personas, y por ende cumplir satisfactoriamente con el servicio requerido, que el personal reflexione sobre la información que tiene acceso y su debido uso, absteniéndose de divulgarla, hecho que podría generar potenciales situaciones de riesgo.
                            </div>
                        </div>
                        <img src="<?=base_url()?>includes/img/panase/v2.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>DISCRECIÓN</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modalw">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                Que las funciones propias de cada persona en la empresa, sean cumplidas en el momento adecuado y necesario para integrar la cadena de servicio al cliente. Prestando a cada una el grado de importancia que le corresponde.
                            </div>
                        </div>
                        <img src="<?=base_url()?>includes/img/panase/v3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>PUNTUALIDAD</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modalw">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                Corresponder ante la responsabilidad y confianza que nos son otorgados, cumpliendo ante el compromiso asumido ante la empresa, estableciendo con ello una relación de reciprocidad y certidumbre.
                            </div>
                        </div>
                        <img src="<?=base_url()?>includes/img/panase/v4.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>LEALTAD</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modalw">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                Responder ante posibles contingencias eligiendo la mejor opción y aportar soluciones en la medida de lo posible. Proponer acciones que puedan mejorar el desempeño propio, grupal y de la empresa. Sin invadir otras áreas de responsabilidad o implementar cambios sin consulta previa ante el jefe inmediato.
                            </div>
                        </div>
                        <img src="<?=base_url()?>includes/img/panase/v5.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>PROACTIVIDAD</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modalw">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                Que el desempeño mostrado por cada integrante de PANASE se encuentre dirigido a la eficiencia, con una actitud que vaya acorde a lo esperado y que se distinga por alejarse de conflictos o desviaciones dañinas para un clima laboral óptimo.
                            </div>
                        </div>
                        <img src="<?=base_url()?>includes/img/panase/v6.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>PROFESIONALISMO</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>









    <section id="personal" class="services">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Nuestro personal</h2>
                    <hr class="colored">
                    <p></p>
                </div>
            </div>

            
            <div class="row nuestro_personal">
                <center>  
                <div class="col-lg-3">
                  <img class="img-circle" src="<?=base_url()?>includes/img/panase/alfa2T.jpg" alt="Generic placeholder image" style="width: 210px; height: 210px;">
                  <h3>ALFA</h3>
                  <p></p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".alfa">Conoce más »</button></p>
                </div>


                <div class="modal fade alfa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="row-modal">
                          <div class="row personal">
                              
                              <div class="col-md-7">
                                <p>
                                    <h2>ALFA</h2>
                                    <b>Elementos de seguridad entrenados en
                                    técnicas avanzadas de protección y seguridad.</b>
                                    <br>
                                     <ul class="text-left">
                                         <li>Entrenados para prevenir y evitar riesgos.</li>
                                         <li>Equipados con gas pimienta y PR-24.</li>
                                         <li>Puede ser contratado en turnos de 24 o 12 horas.</li>
                                         <li>Su uniforme es totalmente identificable como guardia de seguridad, pero al mismo tiempo es afable y ligero.</li>
                                         <li>Tiene conocimiento en Defensa Personal</li>
                                     </ul>
                            
                                    <b>El elemento tiene una especialidad en:</b>
                                     
                                    <ul class="text-left">
                                        <li>Control de accesos</li>
                                        <li>Rondines perimetrales</li>
                                        <li>Atención al usuario</li>
                                        <li>Primeros Auxilios</li>
                                        <li>Conato de Incendios</li>
                                        <li>Brigadas de evacuación en emergencias</li>
                                        <li>Manejo en la llamada de extorsión y amenaza de bomba</li>
                                    </ul>

                                    <b>Recomendado para escuelas, residenciales, empresas.</b>
                                    <br>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> REGRESAR</button>
                                </p>
                              </div>
                              <div class="col-md-5 img100">
                                  <img src="<?=base_url()?>includes/img/panase/alfa2.jpg" alt="alfa" >
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="col-lg-3">
                  <img class="img-circle" src="<?=base_url()?>includes/img/panase/beta2t.jpg" alt="Generic placeholder image" style="width: 210px; height: 210px;">
                  <h3>BETA</h3>
                  <p></p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".beta">Conoce más »</button></p>
                </div>


                <div class="modal fade beta" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="row-modal">
                          <div class="row personal">
                              
                              <div class="col-md-7">
                                <p>
                                    <h2>BETA</h2>
                                    <b>Elementos de seguridad entrenados en técnicas avanzadas de protección y seguridad.</b>
                                    <br>
                                     <ul class="text-left">
                                        <li>Equipados con gas pimienta y PR-24.</li>
                                        <li>Espcialistas en el control de accesos y detección de riesgos.</li>
                                        <li>Puede ser contratado en turnos de 24 o 12 horas.</li>
                                        <li>Este uniforme es más audaz</li>
                                        <li>Cuentan con Acondicionamiento físico</li>
                                        <li>Control de Centro de monitoreo</li>
                                        <li>Control y manejo de eventos especiales</li>
                                        <li>Brigadas de evacuación</li>
                                        <li>Manejo y evacuación en la llamada de extorsión y amenaza de bomba: apoyo a las autoridades en la localización y acordonado de la zona</li>
                                        
                                     </ul>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> REGRESAR</button>
                                </p>
                              </div>
                              <div class="col-md-5 img100">
                                  <img src="<?=base_url()?>includes/img/panase/beta2.jpg" alt="alfa">
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>





                <div class="col-lg-3">
                  <img class="img-circle" src="<?=base_url()?>includes/img/panase/gama2t.jpg" alt="Generic placeholder image" style="width: 210px; height: 210px;">
                  <h3>GAMA</h3>
                 <p></p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".gama">Conoce más »</button></p>
                </div>


                <div class="modal fade gama" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="row personal">
                              
                              <div class="col-md-7">
                                <p>
                                    <h2>GAMA</h2>
                                    <b>Elementos de seguridad entrenados en técnicas avanzadas de protección y seguridad.</b>
                                    <br>
                                     <ul class="text-left">
                                         <li>Son elementos de 12 a 24 hrs.</li>
                                         <li>Control de entradas</li>
                                         <li>Rondines</li>
                                         <li>RCP</li>
                                     </ul>
                            
                                    <b>Manejo de brigadas de emergencia:</b>
                                     
                                    <ul class="text-left">
                                        <li>Búsqueda y rescate</li>
                                        <li>Evacuación</li>
                                        <li>Combate de incendios</li>
                                        <li>Primeros auxilios</li>
                                    </ul>
                                        <p>Guarda espaldas<br>
                                        Control por medio de radio operación
                                        <br>
                                        Control por medio de radio operación
                                        <br>
                                        Conocimiento en Defensa Personal
                                        <br>
                                        Atención al usuario
                                        <br>
                                        Gas pimienta
                                        <br>
                                        Manejo y evacuación en la llamada de extorsión y amenaza de bomba</p>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> REGRESAR</button>
                                  
                                </p>
                              </div>
                              <div class="col-md-5 img100">
                                  <img src="<?=base_url()?>includes/img/panase/gama2.jpg" alt="alfa" >
                              </div>

                          </div>
                    </div>
                  </div>
                </div>




                <div class="col-lg-3">
                  <img class="img-circle" src="<?=base_url()?>includes/img/panase/custodiost.jpg" alt="Generic placeholder image" style="width: 210px; height: 210px;">
                  <h3>CUSTODIOS</h3>
                  <p></p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".custodia">Conoce más »</button></p>
                </div>


                <div class="modal fade custodia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="row personal">
                              
                              <div class="col-md-7 personal">
                                <p>
                                    <h2>CUSTODIOS</h2>
                                    <b>Elementos de seguridad entrenados en técnicas avanzadas de protección y seguridad.</b>
                                    <p>Nuestros custodios a bordo cuentan con el perfil del equipo gamma, su función es custodiar y  dar seguridad en el transporte. Preparados para brindar protección en el traslado vehicular de capitales, equipados para mantener una comunicación constante, entrenados para ubicar con anticipación al trasgresor y reaccionar asertivamente.</p>
                                </p>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> REGRESAR</button>
                              </div>
                              <div class="col-md-5 img100">
                                  <img src="<?=base_url()?>includes/img/panase/custodios.jpg" alt="alfa">
                              </div>
                          </div>
                    </div>
                  </div>
                </div>



                </center>
              </div>

            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2">
                    <b><h3>Elementos de seguridad entrenados en técnicas avanzadas de protección y seguridad</h3></b>
                </div>
            </div>


            
     
        </div>
    </section>

    <section class="pricing" style="background-image: url('<?=base_url()?>includes/img/panase/bg1.jpg')">
        <div class='space-1'></div>

    </section>

    <section id="clientes" class="bg-gray">
        <div class="container text-center">
            <h2>Nuestros Clientes</h2>
            <hr class="colored">
            <p>Empresas, 
                Residenciales, 
                Escuelas, 
                Penales en construcción, 
                Desarrolladores de vivienda, 
                Templos</p>


            
            <div class="row">

            <hr>
            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" data-toggle="modal" data-target=".ep1">
                    <img class="img-responsive" src="<?=base_url()?>includes/img/panase/ep1.jpg" alt="">
                </a>
            </div>


            <div class="modal fade ep1" tabindex="-1" role="dialog" aria-labelledby="ep1" aria-hidden="true">
                 <div class="modal-dialog">
                    <img src="<?=base_url()?>includes/img/panase/empresas23.jpg" alt="alfa" class="img-responsive img-centered" >
                </div>
            </div>



            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" data-toggle="modal" data-target=".ep2">
                    <img class="img-responsive" src="<?=base_url()?>includes/img/panase/ep2.jpg" alt="">
                </a>
            </div>
            <div class="modal fade ep2" tabindex="-1" role="dialog" aria-labelledby="ep1" aria-hidden="true">
                 <div class="modal-dialog">
                    <img src="<?=base_url()?>includes/img/panase/escuela.jpg" alt="alfa" class="img-responsive img-centered" >
                </div>
            </div>



            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" data-toggle="modal" data-target=".ep3">
                    <img class="img-responsive" src="<?=base_url()?>includes/img/panase/ep3.jpg" alt="">
                </a>
            </div>
            <div class="modal fade ep3" tabindex="-1" role="dialog" aria-labelledby="ep1" aria-hidden="true">
                 <div class="modal-dialog">
                    <img src="<?=base_url()?>includes/img/panase/el.jpg" alt="alfa" class="img-responsive img-centered" >
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" data-toggle="modal" data-target=".ep4">
                    <img class="img-responsive" src="<?=base_url()?>includes/img/panase/ep4.jpg" alt="">
                </a>
            </div>
            <div class="modal fade ep4" tabindex="-1" role="dialog" aria-labelledby="ep1" aria-hidden="true">
                 <div class="modal-dialog">
                    <img src="<?=base_url()?>includes/img/panase/dg.jpg" alt="alfa" class="img-responsive img-centered" >
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" data-toggle="modal" data-target=".ep5">
                    <img class="img-responsive" src="<?=base_url()?>includes/img/panase/ep5.jpg" alt="">
                </a>
            </div>
            <div class="modal fade ep5" tabindex="-1" role="dialog" aria-labelledby="ep1" aria-hidden="true">
                 <div class="modal-dialog">
                    <img src="<?=base_url()?>includes/img/panase/ds.jpg" alt="alfa" class="img-responsive img-centered" >
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" data-toggle="modal" data-target=".ep6">
                    <img class="img-responsive" src="<?=base_url()?>includes/img/panase/ep6.jpg" alt="">
                </a>
            </div>
            <div class="modal fade ep6" tabindex="-1" role="dialog" aria-labelledby="ep1" aria-hidden="true">
                 <div class="modal-dialog">
                    <img src="<?=base_url()?>includes/img/panase/cur.jpg" alt="alfa" class="img-responsive img-centered" >
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" data-toggle="modal" data-target=".ep7">
                    <img class="img-responsive" src="<?=base_url()?>includes/img/panase/ep7.jpg" alt="">
                </a>
            </div>
            <div class="modal fade ep7" tabindex="-1" role="dialog" aria-labelledby="ep1" aria-hidden="true">
                 <div class="modal-dialog">
                    <img src="<?=base_url()?>includes/img/panase/ca.jpg" alt="alfa" class="img-responsive img-centered" >
                </div>
            </div>


            <div class="col-lg-3 col-md-4 col-xs-12 thumb">
                <a class="thumbnail" data-toggle="modal" data-target=".ep8">
                    <img class="img-responsive" src="<?=base_url()?>includes/img/panase/ep8.jpg" alt="">
                </a>
            </div>
            <div class="modal fade ep8" tabindex="-1" role="dialog" aria-labelledby="ep1" aria-hidden="true">
                 <div class="modal-dialog">
                    <img src="<?=base_url()?>includes/img/panase/eqt.jpg" alt="alfa" class="img-responsive img-centered" >
                </div>
            </div>
    
        </div>



        </div>
    </section>


    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p class="lead">CERTIFICACIÓN</p>
                    <p>Registro Federal de contribuyentes:  PSP 010914  HG2<br>
                        Registro del I.M.S.S.:  C41 4413910-0<br>
                        Capacitación y adiestramiento:  FOLIO 311/87449</p>
                 
                </div>
            </div>
        </div>

        <div class="container slides-img" >
            <div id="slides" >
              <img src="<?=base_url()?>includes/img/panase/cer.jpg" class="img-responsive img-centered" alt="">
              <img src="<?=base_url()?>includes/img/panase/dc1.jpg" class="img-responsive img-centered" alt="">
              <img src="<?=base_url()?>includes/img/panase/dc2.jpg" class="img-responsive img-centered" alt="">
            </div>
          </div>        



    </section>


     <section id="servicios" class="bg-gray">
        <div class="container text-center">
            <h2>SERVICIOS ESPECIALES</h2>
            <hr class="colored">

            

             <div class="row nuestro_personal">
                <center>  
                <div class="col-lg-3">
                  <img class="img-circle" src="<?=base_url()?>includes/img/panase/ot1.png" alt="Generic placeholder image" style="width: 210px; height: 210px;">
                  <h3>INVESTIGACIONES ESPECIALES KAPPA</h3>
                  <p></p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".inv1">Conoce más »</button></p>
                </div>


                <div class="modal fade inv1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="row-modal">
                          <div class="row personal">
                              
                              <div class="col-md-12">
                                <div class="row text-center espec">
                                        <div class="col-md-6 col-md-offset-3">
                                            <h3><b>Investigaciones Especiales Kappa</b></h3>
                                   
                                            
                                                <img class="img-responsive" src="<?=base_url()?>includes/img/panase/investigaciones.png" alt="">
                                         
                                        </div>

                                        <div class="col-md-8 col-md-offset-2">
                                            <p>Utilizamos diferentes técnicas, apropiadas para cada situación; grafología, instrumento detector de honestidad, entrevista especializada, detectives y baterías de pruebas psicológicas.</p>
                                           
                                            
                                        </div>
                                      
                                    
                                    </div>

                                    <br>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> REGRESAR</button>
                                </p>
                              </div>
                          
                          </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="col-lg-3">
                  <img class="img-circle" src="<?=base_url()?>includes/img/panase/ot2.png" alt="Generic placeholder image" style="width: 210px; height: 210px;">
                  <h3>KAPPA SECURITY MOBILE</h3>
                  <p></p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".kp">Conoce más »</button></p>
                </div>


                <div class="modal fade kp" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="row-modal">
                          <div class="row personal">
                              
                              <div class="col-md-12">
                                <p>
                                    <div class="row text-center espec">
                                            <div class="col-md-12"> <h3><b>Kappa Security Mobile</b></h3></div>
                                             <div class="col-md-5 col-md-offset-2">
                                               
                                                <p>Si necesitas trasladarte tú o tu familia con absoluta seguridad bajo el cuidado de profesionales puedes contratar este servicio por hora o por destino. <br> El chofer está entrenado en técnicas ofensivas y defensivas, (opcionalmente puedes lleavr a un custodio adicional). <br> Utilizamos automóviles disuasivos, con y sin logotipo de seguridad. <br> <b><a href="#contacto">Solicita tu servicio con al menos 24 horas de anticpación.</a></b></p>
                                            
                                            </div>
                                            <div class="col-md-3">
                                                
                                                    <img class="img-responsive" src="<?=base_url()?>includes/img/panase/kms_red.png" alt="">
                                                    
                                            </div>
                                            <div class="col-md-12"></div>
                                        </div>
                                        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> REGRESAR</button>
                                </p>
                              </div>
                              
                          </div>
                      </div>
                    </div>
                  </div>
                </div>





                <div class="col-lg-3">
                  <img class="img-circle" src="<?=base_url()?>includes/img/panase/ot3.png" alt="Generic placeholder image" style="width: 210px; height: 210px;">
                  <h3>SEGURIDAD EN EVENTOS</h3>
                 <p></p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".seg">Conoce más »</button></p>
                </div>


                <div class="modal fade seg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="row personal">
                              
                              <div class="col-md-12">
                                <p>
                                    
                                
                            <div class="row text-center espec">
                                            <div class="col-md-8 col-md-offset-2">
                                                <h3><b>Seguridad en eventos</b></h3>
                                                <p>Contamos con experiencia en cobertura de eventos masivos; tenemos el equipo necesario y el personal capacitado en control de accesos, evacuaciones de emergencia y primeros auxilios.</p>
                                             </div>
                                             <div class="col-md-8 col-md-offset-2">
                                                <a class="thumbnail">
                                                    <img class="img-responsive" src="<?=base_url()?>includes/img/panase/bg21.jpg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    <br><button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> REGRESAR</button>
                                  
                                </p>
                              </div>
                              
                          </div>
                    </div>
                  </div>
                </div>




                <div class="col-lg-3">
                  <img class="img-circle" src="<?=base_url()?>includes/img/panase/ot4.png" alt="Generic placeholder image" style="width: 210px; height: 210px;">
                  <h3>Estudios de vulnerabilidad</h3>
                  <p></p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".stvu">Conoce más »</button></p>
                </div>


                <div class="modal fade stvu" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="row personal">
                              
                              <div class="col-md-12">
                                <p>
                                   <div class="row text-center">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h3><b>Estudios de vulnerabilidad y análisis de riesgo</b></h3>
                                            <p>Se lleva a cabo a través de un recorrido por todas las instalaciones del servicio tomando fotografías y anotaciones de todos los puntos vulnerables. Nos ayuda a Identificar condiciones, prácticas y riesgos que atenten contra la integridad de los recursos humanos, económicos y materiales de todo aquello que integre su patrimonio. Una vez contratado el servicio se le elaborara sin ningún costo.</p>
                                            <p>Se lleva a cabo por personal certificado en la materia. </p>
                                        </div>

                
                                        <div class="img-cont-100">
                                            <center>
                                            <img src="<?=base_url()?>includes/img/panase/bg22.png" alt=""></center>
                                        </div>



                                </div>
                                </p>
                                <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> REGRESAR</button>
                              </div>
                              
                          </div>
                    </div>
                  </div>
                </div>



                </center>
              </div>

                <div class="img-cont-100">
                                            <center>
                                            <img src="<?=base_url()?>includes/img/panase/bg22.png" alt=""></center>
                                        </div>

            
        </div>
    </section>

    <section id="consejos" class="pricing" style="background-image: url('<?=base_url()?>includes/img/panase/cn.jpg')">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Consejos de seguridad</h2>
                    <hr class="colored">
                </div>
            </div>
            <div class="testimonials">
                <div class="row text-center">
                    <div class="testimonials-carousel">
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="lead">Robo a Casa Habitación</p>
                                            <hr class="colored">
                                            <p class="quote">En más de la mitad de los casos los delincuentes entran por el frente del domicilio forzando o violando un sistema de seguridad cuando no se encuentra nadie en casa.

Otra modalidad que utilizan los delincuentes para ingresar al domicilio son los engaños, ya sea ofreciendo algún servicio o pidiendo un favor y, una vez adentro, intimidan o someten a las victimas violentamente.

Algunos delincuentes utilizan símbolos geométricos para marcar las casas que tienen en la mira. Dichos símbolos cumplen la función de avisar si la casa está abandonada, si la familia se encuentra de vacaciones, si hay perro, si en ella vive un policía o una mujer sola, si es viable o no robarla o en todo caso si ya fue robada.</p>
                                            <br>
                                            Seguir leyendo ...
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="lead">La familia: factores de riesgo dentro y fuera de ella.</p>
                                            <hr class="colored">
                                            <p class="quote">La familia es el primer núcleo afectivo de pertenencia de todo individuo, representa aquel espacio donde se comparte un mismo ambiente físico y emocional, es allí donde se desarrollan vínculos diversos, se transmiten aspectos culturales, valores y normas y se dan procesos que influyen en el desarrollo físico, psíquico y social del ser humano.</p>
                                            <br>
                                            Seguir leyendo ...
                                            
                                        </div>
                                    </div>
                                </div>

                              

                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <p class="lead">EXTORSIÓN CON AMENAZA DE SECUESTRO</p>
                                            <hr class="colored">
                                            <p class="quote">La extorsión, es de los delitos que en los últimos años han cobrado importancia a nivel nacional en temas de seguridad.  En la actualidad es importante que la ciudadanía esté consciente de cómo enfrentar a la delincuencia en este tema, y por ello, tenemos que ir avanzando en el terreno de la cultura en dos vertientes, una, la cultura del auto cuidado y dos, la cultura de la denuncia.</p>
                                            <br>
                                            Seguir leyendo ...
                                            
                                        </div>
                                    </div>
                                </div>

                               
                    
                            </div>
                 </div>
            </div>
        </div>
    </section>

    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2>Contáctanos</h2>
                    <hr class="colored">
                    <p>Déjanos tus datos y un representante se pondrá en contacto contigo.</p>
          
                    <form name="sentMessage" id="contactForm"  action='<?=base_url()?>index.php/welcome/send_mail' method="POST">
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Por favor ingresa tu nombre.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Dirección de correo electrónico</label>
                                <input type="text" class="form-control" placeholder="Dirección" id="email" required data-validation-required-message="Ingresa una dirección de correo electrónico.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Télefono</label>
                                <input type="tel" class="form-control" placeholder="Télefono" id="phone" required data-validation-required-message="Ingresa tu telefono.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensaje</label>
                                <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Escribr un mensaje."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-outline-dark">Enviar</button>
                            </div>
                        </div>


                    </form>
                </div>
               
            </div>
        </div>
         <div class="img-cont-80">
                    <center>
                    <img src="<?=base_url()?>includes/img/panase/mail.png" alt=""></center>
                </div>
    </section>
    <div id="map_canvas" style="width:100%; height:600px;"></div>
 

    <footer class="footer" style="background-image: url('<?=base_url()?>includes/img/panase/foo.jpg')">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-phone"></i></h4>
                    <p>53-58-59-64</p>
                    <p>53-58-59-74</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-map-marker"></i></h4>
                    <p>Ricardo Torres No 8<br> Lomas de Sotelo<br>Naucalpan Edo de México</p>
                </div>
                <div class="col-md-4 contact-details">
                    <h4><i class="fa fa-envelope"></i></h4>
                    <p><a href="mailto:feedback@startbootstrap.com">seguridadpanase@gmail.com </a>
                    </p>
                </div>
            </div>
            <div class="row social">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook fa-fw fa-2x"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter fa-fw fa-2x"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin fa-fw fa-2x"></i></a>
                        </li>
                    </ul>
                    <br>
                    <a href="http://www.panamericanadeseguridad.com:2095/">INTRANET</a>
                </div>
            </div>
            <div class="row copyright">
                <div class="col-lg-12">
                    <p class="small"><a href="http://www.coredev.io">DESARROLLADO POR OCTAVIO MARTINEZ - COREDEV.IO</a></p>
                    <p class="small">&copy; 2014 PANAMERICANA DE SEGURIDAD PRIVADA, S.A. DE C.V</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Core Scripts -->
    <script src="<?=base_url()?>includes/js/jquery-1.10.2.js"></script>
    <script src="<?=base_url()?>includes/js/bootstrap/bootstrap.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="<?=base_url()?>includes/js/plugins/jquery.easing.min.js"></script>
    <script src="<?=base_url()?>includes/js/plugins/classie.js"></script>
    <script src="<?=base_url()?>includes/js/plugins/cbpAnimatedHeader.js"></script>
    <script src="<?=base_url()?>includes/js/plugins/owl-carousel/owl.carousel.js"></script>
    <script src="<?=base_url()?>includes/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="<?=base_url()?>includes/js/plugins/jquery.fs.wallpaper.js"></script>

    <script src="<?=base_url()?>includes/js/plugins/jqBootstrapValidation.js"></script>

    <!-- Vitality Theme Scripts -->
    <script src="<?=base_url()?>includes/js/vitality.js"></script>
    <script src="<?=base_url()?>includes/js/jquery.slides.min.js"></script>
    <!-- Style Switcher Scripts - Demo Purposes Only! -->
    <script src="<?=base_url()?>includes/demo/style.switcher.js"></script>
    <script>
    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 1028,
        play: {
          active: true,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });
  </script>

</body>

</html>

<!-- Localized -->