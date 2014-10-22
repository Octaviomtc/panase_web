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
      body {
        padding-left: 20px;
        padding-right: 20px;
      }
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

<body>

    <!-- Navigation -->
    <!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand img-responsive-cont">
                    <img src="<?=base_url()?>includes/img/logo.png" class="img-responsive" alt="">
                </a>
            </div>

           
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>









    <section id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2>TU CORREO HA SIDO ENVIADO</h2>
                    <hr class="colored">
                    <p>En breve un representante se pondrá en contacto contigo.</p>
          
            
                    <button type="submit" class="btn btn-outline-dark">REGRESAR</button>
                </div>
               
            </div>
        </div>
         <div class="img-cont-80">
                    <center>
                    <img src="<?=base_url()?>includes/img/panase/mail.png" alt=""></center>
                </div>
    </section>
    

    <!-- Core Scripts -->
    <script src="<?=base_url()?>includes/js/jquery-1.10.2.js"></script>
    <script src="<?=base_url()?>includes/js/bootstrap/bootstrap.min.js"></script>



</body>

</html>

<!-- Localized -->