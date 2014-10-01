<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PANASE</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
<!--[if IE]>
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
<![endif]-->

<link href="<?=base_url()?>includes/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>includes/css/font-awesome.min.css" rel="stylesheet">
<link href="<?=base_url()?>includes/css/theme.css" rel="stylesheet">
<link id="colours" rel="stylesheet" href="<?=base_url()?>includes/css/colour.css" />
<link href="<?=base_url()?>includes/css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<link href="<?=base_url()?>includes/css/zocial.css" rel="stylesheet" type="text/css"/>
<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
<link rel="stylesheet" type="text/css" href="<?=base_url()?>includes/rs-plugin/css/settings.css" media="screen" />

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<!--header-->
  <div class="header">
<!--menu-->
    <nav id="main_menu" class="navbar" role="navigation">
      <div class="container">
            <div class="navbar-header">
        <!--toggle-->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
        <i class="fa fa-bars"></i>
      </button>
    <!--logo-->
      <div class="logo">
        <a href="index.html"><img src="<?=base_url()?>includes/img/panase/panase-text.png" alt="" class="animated bounceInDown" /></a> 
      </div>
    </div>
           
            <div class="collapse navbar-collapse" id="menu">
                <ul class="nav navbar-nav pull-right">
                        <li class="dropdown active"><a href="javascript:{}">¿Quienes somos?</a> 
              <ul class="dropdown-menu">
              <li><a href="index.html">Slider Revolution</a></li>
              <li><a href="index2.html">Nerve Slider</a></li>
              <li><a href="index3.html">NivoSlider</a></li>
              <li><a href="index4.html">Slides</a></li>
              <li><a href="index5.html">Html5 Video</a></li>
            </ul>
              </li>
              <li class="dropdown"><a href="javascript:{}">Pages</a>
            <ul class="dropdown-menu">
                <li><a href="team.html">The Team</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li><a href="timeline.html">Timeline</a></li>
                <li><a href="full.html">Full Width</a></li>
                <li><a href="left_sidebar.html">Left Sidebar</a></li>
                <li><a href="right_sidebar.html">Right Sidebar</a></li>
            </ul>
              </li>
              <li class="dropdown"><a href="javascript:{}">Work</a>
            <ul class="dropdown-menu">
                <li><a href="portfolio_2columns.html">2 Columns</a></li>
                <li><a href="portfolio_3columns.html">3 Columns</a></li>
                <li><a href="portfolio_4columns.html">4 Columns</a></li>
                <li><a href="portfolio_masonry.html">Masonry</a></li>
                <li><a href="gallery.html">Paginated Gallery</a></li>
                <li><a href="video_gallery.html">Video Gallery</a></li>
                <li><a href="single_portfolio.html">Single Slider</a></li>
                <li><a href="single_video.html">Single Video</a></li>
                <li><a href="single_image.html">Single Image</a></li>
                <li><a href="full_slider.html">Full Slider</a></li>
                <li><a href="full_video.html">Full Video</a></li>
            </ul>
              </li>
              <li class="dropdown"><a href="javascript:{}">Style</a>
            <ul class="dropdown-menu">
                <li><a href="scaffolding.html">Scaffolding</a></li>
                <li><a href="shortcodes.html">Shortcodes</a></li>
                <li><a href="icons.html">Icons</a></li>
                <li><a href="script_examples.html">JS Examples</a></li>
                <li><a href="javascript:{}">Sub Menu</a>
              <ul class="dropdown-menu sub-menu">
                <li><a href="#">Sub One</a></li>
                <li><a href="#">Sub Two</a></li>
                <li><a href="#">Sub Three</a></li>
                <li><a href="#">Sub Four</a></li>
              </ul>
            </ul>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </div>
  <!--//header-->
  
  <!--page-->
    <!-- REVOLUTION SLIDER -->
        <div class="tp-banner-container">
    <div class="tp-banner">
    <ul>
    <!-- Slide 1 -->
      <li data-transition="slideright">
        <img src="<?=base_url()?>includes/img/slider/slider1.jpg" alt="" />
        
        <!-- Caption -->
        <div class="tp-caption lfr" data-x="left" data-y="220" data-speed="2400" data-start="800" data-easing="easeOutExpo">
          <img src="<?=base_url()?>includes/img/slider/robot1.png" alt="" />
        </div>
          
        <!-- Caption -->
        <div class="tp-caption lfb" data-x="870" data-y="150" data-speed="1400" data-start="1800" data-easing="easeOutExpo">
          <img src="<?=base_url()?>includes/img/slider/rocket.png" alt="" />
        </div>
        
        <!-- Caption -->
        <div class="tp-caption lfb" data-x="825" data-y="340" data-speed="1500" data-start="1900" data-easing="easeOutExpo">
          <img src="<?=base_url()?>includes/img/slider/flames.png" alt="" />
        </div>
        
        <!-- Caption -->  
        <div class="caption sft stl" data-x="center" data-y="150" data-speed="1000" data-start="700" data-easing="easeOutExpo">
          <h3 class="rev-title bold">FLATI BOOTSTRAP</h3>
        </div>
        
        <!-- Caption -->
        <div class="caption lfl stl rev-title-sub" data-x="center" data-y="260" data-speed="800" data-start="1100" data-easing="easeOutExpo">
          CREATE - DESIGN - CODE
        </div>
        
        <!-- Caption -->
        <div class="caption sfb" data-x="center" data-y="350" data-speed="1100" data-start="1500" data-easing="easeOutExpo">
          <a href="#" class="btn btn-outline btn-mobile">OUR PORTFOLIO</a>                 
        </div>
      </li>
      
   
      </ul>
      <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
        <!-- // END REVOLUTION SLIDER -->

  <div id="banner">
  <div class="container intro_wrapper">
  <div class="inner_content">
  
  <!--welcome-->
    <div class="welcome_index">
      I think most <a href="#"><span class="hue_block white normal">programmers</span></a> spend the first 5 years of their career mastering 
      <span class="hue">complexity</span> and the rest of their lives learning <span>simplicity</span>
      - Buzz Andersen
    </div>
  <!--//welcome-->
    </div>
      </div>
        </div>
        <!--//banner-->
      
  <div class="container wrapper">
  <div class="inner_content">
  
  <!--info boxes-->
  <div class="row pad45">
      <div class="col-sm-6 col-md-3">
        <div class="tile">
          <div class="intro-icon-disc cont-large"><i class="fa fa-pencil intro-icon-large"></i></div>
          <h6>
            <span>DESIGN<br><a href="#">built for &amp; by nerds</a></span>
          </h6>
          <p>
            Like you, we love building awesome products on the web. We love it so much, we decided to help people just like us do it easier, 
            better, and faster.
          </p>
          </div> 
        <div class="pad25"></div>
      </div> 
        
      <div class="col-sm-6 col-md-3">
        <div class="tile">
          <div class="intro-icon-disc cont-large"><i class="fa fa-umbrella intro-icon-large"></i></div>
            <h6>
              <span>CODE<br><a href="#">12-column grid</a></span>
            </h6>
            <p>
              Bootstrap is designed to help people of all skill levels - designer or developer, huge nerd or early beginner. 
              Use it as a complete kit or use to start something.
            </p>
            </div> 
        <div class="pad25"></div>
      </div> 
          
      <div class="col-sm-6 col-md-3">
        <div class="tile">
          <div class="intro-icon-disc cont-large"><i class="fa fa-flask intro-icon-large"></i></div>
            <h6><span>CREATE<br><a href="#">responsive</a></span></h6>
            <p>
              Bootstrap have gone fully responsive. Our components are scaled according to a range of resolutions and devices to provide a 
              consistent experience.
            </p>  
            </div> 
        <div class="pad25"></div>
      </div> 
        
      <div class="col-sm-6 col-md-3">
        <div class="tile tile-hot">
          <div class="intro-icon-disc cont-large"><i class="fa fa-book  intro-icon-large"></i></div>
            <h6>
              <span>SUPPORT<br><a href="#">growing library</a></span></h6>
            <p>
              Despite being only 7kb (gzipped), Bootstrap is one of the most complete front-end toolkits out there with dozens of fully functional components.
            </p>
            </div>
          <div class="pad25"></div> 
      </div> 
        </div> 
        
      <!--//info boxes-->
      
      <div class="pad25 hidden-xs hidden-sm"></div> 
      <div class="row">
      <!--col 1-->
      <div class="col-md-12">
      <div class="row">
      
      <div class="col-sm-12 col-md-4">
      <h1>Recent Work</h1>
      <h4>
        Lorem ipsum dolor sit amet, rebum putant recusabo in ius, pri simul tempor ne, his ei summo virtute.
      </h4>
      <p>
        Nam ea labitur pericula. Meis tamquam pro te, cibo mutat necessitatibus id vim. An his tamquam postulant, pri id mazim nostrud diceret 
        sapientem eloquentiam sea cu, sea ut exerci delicata. Corrumpit vituperata.
      </p>
      
      <a href="#" class="btn btn-primary btn-custom btn-rounded">view portfolio</a>
      <div class="pad30"></div>
      </div>
      
      <!--column 2 slider-->
      <div class="col-xs-12 col-sm-12 col-md-8 pad30">
      
      <div id="slider_home">
            <div class="slider-item"> 
        <div class="slider-image">
        <div class="hover_colour">
        <a href="img/large/s1.jpg" data-rel="prettyPhoto">
          <img src="<?=base_url()?>includes/img/small/s1.jpg" alt="" /></a>
          </div>
        </div>
        <div class="slider-title">
        <h3><a href="#">catalogue</a></h3>
        <p>An his tamquam postulant, pri id mazim nostrud diceret.</p>
        </div>
      </div>
      
      <div class="slider-item">
        <div class="slider-image">
        <div class="hover_colour">
        <a href="img/large/s2.jpg" data-rel="prettyPhoto">
          <img src="<?=base_url()?>includes/img/small/s2.jpg" alt="" /></a>
          </div>
        </div>
        <div class="slider-title">
        <h3><a href="#">loupe</a></h3>
        <p>An his tamquam postulant, pri id mazim nostrud diceret.</p>
        </div>
      </div>
      
      <div class="slider-item">
        <div class="slider-image">
        <div class="hover_colour">
        <a href="img/large/s3.jpg" data-rel="prettyPhoto">
          <img src="<?=base_url()?>includes/img/small/s3.jpg" alt="" /></a>
          </div>
        </div>
        <div class="slider-title">
        <h3><a href="#">retro rocket</a></h3>
        <p>An his tamquam postulant, pri id mazim nostrud diceret.</p>
        </div>
      </div>
      
      <div class="slider-item">
        <div class="slider-image">
        <div class="hover_colour">
        <a href="img/large/s4.jpg" data-rel="prettyPhoto">
          <img src="<?=base_url()?>includes/img/small/s4.jpg" alt="" /></a>
          </div>
        </div>
        <div class="slider-title">
        <h3><a href="#">infographics</a></h3>
        <p>An his tamquam postulant, pri id mazim nostrud diceret.</p>
        </div>
      </div>
      
      <div class="slider-item">
        <div class="slider-image">
        <div class="hover_colour">
        <a href="img/large/s5.jpg" data-rel="prettyPhoto">
          <img src="<?=base_url()?>includes/img/small/s5.jpg" alt="" /></a>
          </div>
        </div>
        <div class="slider-title">
        <h3><a href="#">mock up</a></h3>
          <p>An his tamquam postulant, pri id mazim nostrud diceret.</p>
          </div>
        </div>
      
      <div class="slider-item">
        <div class="slider-image">
        <div class="hover_colour">
        <a href="img/large/s6.jpg" data-rel="prettyPhoto">
          <img src="<?=base_url()?>includes/img/small/s6.jpg" alt="" /></a>
          </div>
        </div>
        <div class="slider-title">
        <h3><a href="#">retro badges</a></h3>
          <p>An his tamquam postulant, pri id mazim nostrud diceret.</p>
          </div>
        </div>
      
      <div class="slider-item">
      <div class="slider-image">
        <div class="hover_colour">
        <a href="img/large/s7.jpg" data-rel="prettyPhoto">
          <img src="<?=base_url()?>includes/img/small/s7.jpg" alt="" /></a>
          </div>
        </div>
        <div class="slider-title">
        <h3><a href="#">details</a></h3>
          <p>An his tamquam postulant, pri id mazim nostrud diceret.</p>
        </div>
      </div>
      
      <div class="slider-item">
        <div class="slider-image">
        <div class="hover_colour">
        <a href="img/large/s8.jpg" data-rel="prettyPhoto">
          <img src="<?=base_url()?>includes/img/small/s8.jpg" alt="" /></a>
          </div>
        </div>
        <div class="slider-title">
        <h3><a href="#">vintage form</a></h3>
          <p>An his tamquam postulant, pri id mazim nostrud diceret.</p>
        </div>
      </div>
        </div>
        <div id="sl-prev" class="widget-scroll-prev"><i class="fa fa-chevron-left white"></i></div>
        <div id="sl-next" class="widget-scroll-next"><i class="fa fa-chevron-right white but_marg"></i></div>
      <div class="pad25"></div> </div>
        </div>
        </div>
      </div>
    </div>
    <!--//page-->
  </div>
  
  <!-- footer -->
  <div id="footer">
    <h1>get in touch</h1>
      <h3 class="center follow">
        We're social and we'd love to hear from you! Feel free to send us an email, find us on Google Plus, follow us on Twitter and join us on Facebook.
      </h3>
  <div class="follow_us">
    <a href="#" class="fa fa-twitter follow_us"></a>
    <a href="#" class="fa fa-facebook follow_us"></a>
    <a href="#" class="fa fa-linkedin follow_us"></a>
    <a href="#" class="fa fa-google-plus follow_us"></a>
    <a href="#" class="fa fa-vimeo-square follow_us"></a>
    </div>
  </div>
  
  <!-- footer 2 -->
  <div id="footer2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="copyright">
              FLATI
              &copy;
              <script type="text/javascript">
              //<![CDATA[
                var d = new Date()
                document.write(d.getFullYear())
                //]]>
                </script>
               - All Rights Reserved :
              Template by <a href="http://spiralpixel.com">Spiral Pixel</a>
            </div>
            </div>
          </div>
        </div>
          </div>
        <!-- up to top -->
        <a href="#"><i class="go-top fa fa-angle-double-up"></i></a>
        <!--//end-->
        
<!-- SCRIPTS -->
<script src="<?=base_url()?>includes/js/jquery.js"></script>      
<script src="<?=base_url()?>includes/js/bootstrap.min.js"></script> 
<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
<script type="text/javascript" src="<?=base_url()?>includes/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
<script type="text/javascript" src="<?=base_url()?>includes/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- slider settings -->
<script type="text/javascript">
  //<![CDATA[
      jQuery(document).ready(function() {
          jQuery('.tp-banner').show().revolution(
        {
          delay:9000,
          startwidth:1170,
          startheight:600,
          navigationType:"bullet",
          navigationStyle:"square",
          hideBulletsOnMobile:"on",
          hideArrowsOnMobile: "on",
          shadow:0,
          fullWidth:"on",
        });
      }); 
    //]]>
  </script>

<script src="<?=base_url()?>includes/js/jquery.touchSwipe.min.js"></script>
<script src="<?=base_url()?>includes/js/jquery.mousewheel.min.js"></script>       
<script type="text/javascript" src="<?=base_url()?>includes/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="<?=base_url()?>includes/js/scripts.js"></script>

<!-- carousel -->
<script type="text/javascript" src="<?=base_url()?>includes/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function($) {
  $("#slider_home").carouFredSel({ 
    width : "100%", 
    height : "auto",
    responsive : true,
    auto : false,
    items : { width : 280, visible: { min: 1, max: 3 }
    },
    swipe : { onTouch : true, onMouse : true },
    scroll: { items: 1, },
    prev : { button : "#sl-prev", key : "left"},
    next : { button : "#sl-next", key : "right" }
    });
  });
//]]>
</script>
</body>
</html>

<!-- Localized -->