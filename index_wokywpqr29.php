<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AIFA: Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/> 
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <!-- #region Jssor Slider Begin -->
    <script src="assets/js/jssor.slider-23.1.5.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_1_slider_init = function() {

            var jssor_1_options = {
              $AutoPlay: 1,
              $Idle: 0,
              $AutoPlaySteps: 4,
              $SlideDuration: 2500,
              $SlideEasing: $Jease$.$Linear,
              $PauseOnHover: 4,
              $SlideWidth: 140,
              $Cols: 7
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 809);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*responsive code end*/
        };
    </script>
  
  <!-- BEGAIN PRELOADER -->
  <!-- <div id="preloader">
    <div id="status">&nbsp;</div>
  </div> -->
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  
  
  

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.php"><img src="assets/images/aifalogo.png" alt="AIFA Reading Society"></a>              
          <!-- IMG BASED LOGO  -->
           <!-- <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Insights <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="news.php">News</a></li>                
                <li><a href="events.php">Events</a></li>
                <li><a href="bookreview.php">Book review</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Membership<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="individual.php">Individual</a></li>                
                <li><a href="corporate.php">Corporate</a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contact Us</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
        
      </div>     
    </nav>
  </section>
  <!-- END MENU --> 
  <div><br><br></div>



  <!-- Start slider -->
  <section id="slider">
    <div class="main-slider">
      <div class="single-slide">
        <img src="assets/images/slider-1.jpg" alt="img">
        
      </div>
      <div class="single-slide">
        <img src="assets/images/slider-3.jpg" alt="img">
        
      </div>

      <div class="single-slide">
        <img src="assets/images/slider-5.jpg" alt="img">
        
      </div> 

    </div>
  </section>
  <!-- End slider -->



  <!-- Start counter -->
  <section id="counter">
    <div class="counter-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="counter-area">
              <div class="row">
                <!-- Start single counter -->
                <div class="col-md-6 col-sm-6">
                  <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-suitcase"></i>
                    </div>
                    <div class="counter-no counter">
                      11
                    </div>
                    <div class="counter-label">
                      Projects
                    </div>
                  </div>
                </div>
                <!-- End single counter -->
                
                <!-- Start single counter -->
                <div class="col-md-6 col-sm-6">
                  <div class="single-counter">
                    <div class="counter-icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="counter-no counter">
                      4009
                    </div>
                    <div class="counter-label">
                      Lives Touched
                    </div>
                  </div>
                </div>
                <!-- End single counter -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End counter -->


  <!-- Start Pricing table -->
  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Programmes</h2>
            <span class="line"></span>
            
          </div>
        </div>
        <div class="col-md-12">
          <div class="pricing-table-content">
            <div class="row">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table-price wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <div class="price-header">
                    <span class="price-title"><b>Little Writers Awards</b></span>
                    <div class="price">
                      <img class="img-responsive" src="assets/images/program1.png" alt="">
                    </div>
                  </div>
                  <div class="price-article">
                    <ul>
                      <li>The Little Writers Awards is an annual competition organised for students and teachers of government-owned secondary schools. The yearly essay competition organised by the Society is aimed at affording school students and teachers the opportunity to think and analyse issues of importance to the development of education in Nigeria and also create a platform to showcase and improve their writing skills.</li>
                    </ul>
                  </div>
                  <div class="price-footer">
                    <a class="purchase-btn" href="littlewriteraward.php">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table-price wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.75s">
                  <div class="price-header">
                    <span class="price-title"><b>Calculate2Succeed</b></span>
                    <div class="price">
                      <img class="img-responsive" src="assets/images/program2.png" alt="">
                    </div>
                  </div>
                  <div class="price-article">
                    <ul>
                      <li>The AIFA Reading Society Calculate2Succeed is one of the projects under the Society’s Junior Initiative. Through this project, the Society seeks to empower students in government owned secondary schools with the tools necessary to succeed in mathematics and science subjects. <br><br><br><br></li>
                    </ul>
                  </div>
                  <div class="price-footer">
                    <a class="purchase-btn" href="calculate2succeed.php">Read More</a>
                  </div>
                </div>
              </div>
              
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-table-price wow fadeInUp" data-wow-duration="1.15s" data-wow-delay="1.15s">
                  <div class="price-header">
                    <span class="price-title"><b>Book Drive</b></span>
                    <div class="price">
                      <img class="img-responsive" src="assets/images/program3.jpg" alt="">
                    </div>
                  </div>
                  <div class="price-article">
                    <ul>
                      <li>The AIFA Reading Society Book Recycle has been established to address the lack of text books in government owned secondary school’s library. Through an annual book drive, the Society will engage private schools, corporate organisations and individuals to support the initiative by donating educational textbooks and other instructional materials.<br><br><br></li>
                    </ul>
                  </div>
                  <div class="price-footer">
                    <a class="purchase-btn" href="book-recycle.php">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div><br><br></div>
  </section>
  
  <!-- End Pricing table -->



  <!-- Start Clients brand -->
  
  <section id="clients-brand">
  <div><br><br></div>
    <div class="container">
      <div class="row">
      <div class="col-md-12">
           <div class="title-area">
              <h2 class="title">PARTNERS</h2>
              <span class="line"></span>
              <p>We Partner with Corporate Organisations, Government and State Institutions to achieve sustainable educational development in Africa by promoting and supporting a reading culture.</p>
              <div><br></div>

            </div>
         </div>
        <div class="col-md-12">
          <div class="clients-brand-area">
          <style></style>
            

            <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('assets/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
            <div>
                <img data-u="image" src="assets/images/kenna.png" />
            </div>
            <div>
                <img data-u="image" src="assets/images/prestige-t.png" />
            </div>
            <div>
                <img data-u="image" src="assets/images/novarre.png" />
            </div>
            <div>
                <img data-u="image" src="assets/images/urshday.png" />
            </div>
            <div>
                <img data-u="image" src="assets/images/funworld.png" />
            </div>
            <div>
                <img data-u="image" src="assets/images/kenna.png" />
            </div>
            <div>
                <img data-u="image" src="assets/images/prestige-t.png" />
            </div>
            <div>
                <img data-u="image" src="assets/images/novarre.png" />
            </div>
            <div>
                <img data-u="image" src="assets/images/urshday.png" />
            </div>
            <div>
                <img data-u="image" src="assets/images/funworld.png" />
            </div>
            
        </div>
    </div>
    <script type="text/javascript">jssor_1_slider_init();</script>
    <!-- #endregion Jssor Slider End -->




          </div>
        </div>
      </div>
    </div>
    <div><br><br></div>
  </section>
  <!-- End Clients brand -->
  
  <!-- Start subscribe us -->
  <section id="subscribe">
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2 class="wow fadeInUp">Subscribe To Our Newsletter</h2>
              <form action="" class="subscrib-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <input type="text" placeholder="Enter Your E-mail..">
                <button class="subscribe-btn" type="submit">Submit</button>
              </form>
            </div>
          </div>        
        </div>
      </div>
      </div>
  </section>
  <!-- End subscribe us -->

  <!-- Start footer -->
  <footer id="footer">
<div class="col-md-12">
          <div class="latest-news-content">
            <div class="row">
              <!-- start single latest news -->
              <div class="col-md-4">
                <article class="blog-news-single">
                  <address class="single-address">
                     <p>LAGOS</p>
                     <p>8, Onigefon Rd, Off Palace Way, Oniru, Victoria Island<br> Lagos </p>
                     <p>+234 812 621 2635 </p>
                   </address>
                </article>
              </div>
              <!-- start single latest news -->
              <div class="col-md-4">
                <article class="blog-news-single">
                  <address class="single-address">
                     <p>ABUJA</p>
                     <p>Gwandal Centre, Plot 1015, Fria Close, Fomulla Str., Adetokunbo Ademola Crescent Wuse II, Fct,<br> Abuja</p>
                     <p>+234 815 839 0719</p>
                   </address>
                </article>
              </div>
              <!-- start single latest news -->
              <div class="col-md-4">
                <article class="blog-news-single">
                  <address class="single-address">
                     <p>ENUGU</p>
                     <p>1, Umunye Lane, 110 Ogurugu Rd, Odenigbo Nsukka,<br> Enugu</p>
                     <p>+234 812 621 2535</p>
                   </address>
                </article>
              </div>
            </div>
          </div>
        </div>


    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
            <!-- <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p> -->
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="https://www.facebook.com/aifareadingsociety/" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="https://twitter.com/aifareading" target="_blank"><i class="fa fa-twitter"></i></a>
            
            <a href="https://www.linkedin.com/company/10857221?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10857221%2Cidx%3A3-1-10%2CtarId%3A1473327276418%2Ctas%3AAIFA%20RE" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a href="https://www.instagram.com/aifareadingsociety/" target="_blank"><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
 <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  
  </body>
</html>