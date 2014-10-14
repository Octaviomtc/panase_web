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
          center: new google.maps.LatLng(19.455254, -99.217123),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PANASE</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url()?>includes/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Retina.js - Load first for faster HQ mobile images. -->

    <!-- Font Awesome -->
    <link href="<?=base_url()?>includes/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Default Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' rel='stylesheet' type='text/css'>

    <!-- Modern Style Fonts (Include these is you are using body.modern!) -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Vintage Style Fonts (Include these if you are using body.vintage!) -->
    <link href='http://fonts.googleapis.com/css?family=Sanchez:400italic,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="<?=base_url()?>includes/css/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>includes/css/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>includes/css/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>includes/css/plugins/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>includes/css/plugins/jquery.fs.wallpaper.css" rel="stylesheet" type="text/css">


    <!-- Style Switcher CSS - Demo Purposes Only! -->
    <link id="changeable-colors" rel="stylesheet" href="<?=base_url()?>includes/css/vitality-red.css">
    <link href="<?=base_url()?>includes/demo/style-switcher.css" rel="stylesheet">
    <link href="<?=base_url()?>includes/css/custom.css" rel="stylesheet">


    <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css/common.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/css/style.css" />

    <!-- IE8 support for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>


    <![endif]-->


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
                        <a href="#consejos">Consejos de seguridad</a>
                    </li>
                    <li>
                        <a href="#contact">Cotizaciones y contacto</a>
                    </li>
                    <li>
                        <a href="#servicios">Servicios especiales</a>
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
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1>“Nuestro trabajo es la seguridad, tu tranquilidad es nuestra misión”</h1>
                    
                    <hr class="colored">
                </div>
            </div>
            <div class="row text-center content-row">
                <div class="col-md-4 col-sm-6">
                    <div class="about-content">
                         <img src="<?=base_url()?>includes/img/panase-w.png" class="img-responsive img-centered" alt="">
                    </div>
                </div>

                <div class="col-md-8 col-sm-6">
                    <div class="about-content">
                        <p><b>PANAMERICANA DE SEGURIDAD PRIVADA, S.A. DE C.V.</b>; es una empresa legalmente constituida en el 2001 y registrada con la finalidad de prestar servicios de seguridad para personas físicas y morales. Se trata de una empresa 100% mexicana que trabaja las 24 horas del día los 365 días del año con prestación de servicios en el Distrito Federal, Estado de México, Oaxaca, Morelos y Querétaro. </p>
                        <p>Nuestra amplia experiencia dentro del ramo de la seguridad privada nos proporciona la confianza de brindarle el mejor servicio diseñado para adaptarse a sus necesidades de seguridad, brindándole de esta manera la garantía de un servicio profesional.</p>
                        <p>Nuestro personal está altamente capacitado y entrenado para que responda prudente e inteligentemente al resguardar la seguridad de las personas, que tenga la capacidad de observación a efecto de registrar todo detalle de lo acontecido sabiendo salvaguardar el lugar de los hechos para evitar la destrucción de la evidencia, además de estar capacitados para solicitar primeros auxilios y apoyos oficiales.</p>
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>


    <section id="valores" class="bg-gray">
        <div class="container-fluid">
            <div class="row text-center">
                <div class="col-md-5 col-md-offset-1">
                    <h1><b>Misión</b></h1>
                    <p>“Somos una empresa de seguridad privada que busca lograr la tranquilidad del cliente a través de una atención personalizada, caracterizada por su dinamismo y solución acertada a sus necesidades, tanto a nivel preventivo como correctivo.”</p>
                </div>
                <div class="col-md-5">
                    <h1><b>Visión</b></h1>
                    <p>“Somos una empresa de seguridad privada que busca lograr la tranquilidad del cliente a través de una atención personalizada, caracterizada por su dinamismo y solución acertada a sus necesidades, tanto a nivel preventivo como correctivo.”</p>
                </div>
            </div>
        </div>
    </section>

        <section class="pricing" style="background-image: url('<?=base_url()?>includes/img/panase/comandante1.jpg')">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h2>Valores</h2>
                    <hr class="colored">
                </div>
            </div>
            <div class="row content-row">
                <div class="col-md-5">
                    <div class="pricing-item featured-first">
                        <h3>Responsabilidad</h3>
                        <hr class="colored">
                        <p>Conocer la importancia e implicación de sus funciones, respondiendo ante sus aciertos y errores, impulsando y contribuyendo con la cadena de actividades que permita construir  el servicio que ofrece la empresa.</p>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="pricing-item featured-last">
                        <h3>Dirección</h3>
                        <hr class="colored">
                        <p>De vital importancia para garantizar la seguridad de los clientes, inmuebles o personas, y por ende cumplir satisfactoriamente con el servicio requerido, que el personal reflexione sobre la información que tiene acceso y su debido uso, absteniéndose de divulgarla, hecho que podría generar potenciales situaciones de riesgo.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pricing-item featured-first">
                        <h3>Puntualidad</h3>
                        <hr class="colored">
                        <p>Que las funciones propias de cada persona en la empresa, sean cumplidas en el momento adecuado y necesario para integrar la cadena de servicio al cliente. Prestando a cada una el grado de importancia que le corresponde.</p>
                       
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pricing-item featured-last">
                        <h3>Lealtad</h3>
                        <hr class="colored">
                        <p>Corresponder ante la responsabilidad y confianza que nos son otorgados, cumpliendo ante el compromiso asumido ante la empresa, estableciendo con ello una relación de reciprocidad y certidumbre.</p>
                       
                    </div>
                </div>
                
                <div class="col-md-7">
                    <div class="pricing-item featured-first">
                        <h3>Proactividad</h3>
                        <hr class="colored">
                        <p>Responder ante posibles contingencias eligiendo la mejor opción y aportar soluciones en la medida de lo posible. Proponer acciones que puedan mejorar el desempeño propio, grupal y de la empresa. Sin invadir otras áreas de responsabilidad o implementar cambios sin consulta previa ante el jefe inmediato.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="pricing-item featured-last">
                        <h3>Profesionalismo</h3>
                        <hr class="colored">
                        <p>Que el desempeño mostrado por cada integrante de PANASE se encuentre dirigido a la eficiencia, con una actitud que vaya acorde a lo esperado y que se distinga por alejarse de conflictos o desviaciones dañinas para un clima laboral óptimo.</p>
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
                  <img class="img-circle" src="<?=base_url()?>includes/img/panase/alfa2T.jpg" alt="Generic placeholder image" style="width: 160px; height: 160px;">
                  <h3>ALFA</h3>
                  <p>Elementos de seguridad entrenados en técnicas avanzadas de protección y seguridad.</p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".alfa">Conoce más »</button></p>
                </div>


                <div class="modal fade alfa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="container row-modal">
                          <div class="row">
                              
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
                                </p>
                              </div>
                              <div class="col-md-5">
                                  <img src="<?=base_url()?>includes/img/panase/alfa2.jpg" alt="alfa" class="img100">
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>



                <div class="col-lg-3">
                  <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 160px; height: 160px;">
                  <h3>BETA</h3>
                  <p>Elementos de seguridad entrenados en técnicas avanzadas de protección y seguridad.</p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".beta">Conoce más »</button></p>
                </div>


                <div class="modal fade beta" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      ...
                    </div>
                  </div>
                </div>





                <div class="col-lg-3">
                  <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 160px; height: 160px;">
                  <h3>GAMA</h3>
                 <p>Elementos de seguridad entrenados en técnicas avanzadas de protección y seguridad.</p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".gama">Conoce más »</button></p>
                </div>


                <div class="modal fade gama" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      ...
                    </div>
                  </div>
                </div>




                <div class="col-lg-3">
                  <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 160px; height: 160px;">
                  <h3>CUSTODIAS</h3>
                  <p>Elementos de seguridad entrenados en técnicas avanzadas de protección y seguridad.</p>
                  <p><button class="btn btn-default" data-toggle="modal" data-target=".custodia">Conoce más »</button></p>
                </div>


                <div class="modal fade custodia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      ...
                    </div>
                  </div>
                </div>



                </center>
              </div>


            <div class="row text-center">
                <div class="col-lg-12">
                    <h3>Estudios de vulnerabilidad y análisis de riesgo</h3>
                    <p>Se lleva a cabo a través de un recorrido por todas las instalaciones del servicio tomando fotografías y anotaciones de todos los puntos vulnerables. Nos ayuda a Identificar condiciones, prácticas y riesgos que atenten contra la integridad de los recursos humanos, económicos y materiales de todo aquello que integre su patrimonio. Una vez contratado el servicio se le elaborara sin ningún costo.</p>
                    <p>Se lleva a cabo por personal certificado en la materia. </p>
                </div>
            </div>
     
        </div>
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
        </div>
    </section>

<!--     <section class="portfolio-carousel">
        <div class="item" style="background-image: url('<?=base_url()?>includes/img/portfolio/bg-1.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="<?=base_url()?>includes/img/client-logos/logo-1.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">Project Name</span>
                            <span class="project-description">Branding, Website Design</span>
                            <hr class="colored">
                            <a href="#portfolioModal1" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="<?=base_url()?>includes/img/portfolio/mobile-screens.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('<?=base_url()?>includes/img/portfolio/bg-2.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="<?=base_url()?>includes/img/client-logos/logo-2.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">Project Name</span>
                            <span class="project-description">Branding, Website Design</span>
                            <hr class="colored">
                            <a href="#portfolioModal2" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="<?=base_url()?>includes/img/portfolio/tablet-screens.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('<?=base_url()?>includes/img/portfolio/bg-3.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="<?=base_url()?>includes/img/client-logos/logo-1.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">Project Name</span>
                            <span class="project-description">Branding, Website Design</span>
                            <hr class="colored">
                            <a href="#portfolioModal3" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="<?=base_url()?>includes/img/portfolio/mobile-screens.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="item" style="background-image: url('<?=base_url()?>includes/img/portfolio/bg-4.jpg')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 col-md-push-8">
                        <div class="project-details">
                            <img src="<?=base_url()?>includes/img/client-logos/logo-2.png" class="img-responsive client-logo" alt="">
                            <span class="project-name">Project Name</span>
                            <span class="project-description">Branding, Website Design</span>
                            <hr class="colored">
                            <a href="#portfolioModal4" data-toggle="modal" class="btn btn-outline-light">View Details <i class="fa fa-long-arrow-right fa-fw"></i></a>
                        </div>
                    </div>
                    <div class="col-md-8 col-md-pull-4 hidden-xs">
                        <img src="<?=base_url()?>includes/img/portfolio/tablet-screens.png" class="img-responsive portfolio-image" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <section class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <p class="lead">CERTIFICACIÓN</p>
                    <p>Registro Federal de contribuyentes:  PSP 010914  HG2<br>
                        Registro del I.M.S.S.:  C41 4413910-0<br>
                        Capacitación y adiestramiento:  FOLIO 311/87449</p>
                         <img src="<?=base_url()?>includes/img/panase/cer.jpg" class="img-responsive img-centered" alt="">

                    
                </div>
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

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Contáctanos</h2>
                    <hr class="colored">
                    <p>Déjanos tus datos y un representante se pondrá en contacto contigo.</p>
                </div>
            </div>
            <div class="row content-row">
                <div class="col-lg-8 col-lg-offset-2">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nombre</label>
                                <input type="text" class="form-control" placeholder="Nombre" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Dirección</label>
                                <input type="text" class="form-control" placeholder="Dirección" id="email" required data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Télefono</label>
                                <input type="tel" class="form-control" placeholder="Télefono" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensaje</label>
                                <textarea rows="5" class="form-control" placeholder="Mensaje" id="message" required data-validation-required-message="Please enter a message."></textarea>
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
    </section>
    <div id="map_canvas" style="width:100%; height:400px;"></div>
 

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
                </div>
            </div>
            <div class="row copyright">
                <div class="col-lg-12">
                    <p class="small">&copy; 2014 COREDEV & PANAMERICANA DE SEGURIDAD PRIVADA, S.A. DE C.V</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Example Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('<?=base_url()?>includes/img/portfolio/bg-1.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="<?=base_url()?>includes/img/client-logos/logo-1.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="<?=base_url()?>includes/img/portfolio/mobile-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Example Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('<?=base_url()?>includes/img/portfolio/bg-2.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="<?=base_url()?>includes/img/client-logos/logo-2.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="<?=base_url()?>includes/img/portfolio/tablet-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Example Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('<?=base_url()?>includes/img/portfolio/bg-3.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="<?=base_url()?>includes/img/client-logos/logo-1.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="<?=base_url()?>includes/img/portfolio/mobile-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Example Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true" style="background-image: url('<?=base_url()?>includes/img/portfolio/bg-4.jpg')">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <img src="<?=base_url()?>includes/img/client-logos/logo-2.png" class="img-responsive img-centered" alt="">
                            <h2>Project Title</h2>
                            <hr class="colored">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi in tenetur vero voluptatum sapiente dolores eligendi nemo iste ea. Omnis, odio enim sint quam dolorum dolorem. Nostrum, minus, ad.</p>
                        </div>
                        <div class="col-lg-12">
                            <img src="<?=base_url()?>includes/img/portfolio/tablet-screens.png" class="img-responsive img-centered" alt="">
                        </div>
                        <div class="col-lg-8 col-lg-offset-2">
                            <ul class="list-inline item-details">
                                <li>Client: <strong><a href="http://startbootstrap.com">Start Bootstrap</a></strong>
                                </li>
                                <li>Date: <strong><a href="http://startbootstrap.com">April 2014</a></strong>
                                </li>
                                <li>Service: <strong><a href="http://startbootstrap.com">Web Development</a></strong>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
    <script src="<?=base_url()?>includes/js/contact_me.js"></script>
    <script src="<?=base_url()?>includes/js/plugins/jqBootstrapValidation.js"></script>

    <!-- Vitality Theme Scripts -->
    <script src="<?=base_url()?>includes/js/vitality.js"></script>

    <!-- Style Switcher Scripts - Demo Purposes Only! -->
    <script src="<?=base_url()?>includes/demo/style.switcher.js"></script>

</body>

</html>

<!-- Localized -->