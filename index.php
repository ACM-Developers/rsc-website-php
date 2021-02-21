<?php 
require_once("./include/db_config.php");
require_once("./include/acm_membership_config.php");
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>WCE Research Symposium on Computing | Home</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="WCE ACM Student Chapter is a recently formed ACM student chapter in Walchand College of Engineering, Sangli. The chapter aims to conduct various technical & non-technical activities for overall development of the students of the institute. The chapter has received official authorization from the WCE India Council to operate at a local level." />
  <meta name="keywords" content="WCE ACM Student Chapter, ACM Student Chapter, Walchand College of Engineering Sangli, CSE Department, WCE Sangli, WCE ACM, Student Activity" />

  <meta name="author" content="Vinayak Sharma | Prajwal Bhagat | Rushikesh Shelke" />

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />

  <!-- Margo JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png"> 
  <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/manifest.json">  
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-85671004-1', 'auto');
    ga('send', 'pageview');
  </script>
</head>

<body style="background: url(images/patterns/5.png) repeat;">

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> Walchand College of Engineering, Sangli, MH-IN</a>
                </li>
                <li><a href="mailto:<?php echo $acm->SiteEmail(); ?>"><i class="fa fa-envelope-o"></i> <?php echo $acm->SiteEmail(); ?></a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> <?php echo $acm->SiteContact(); ?></a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-3">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="<?php echo $acm->SiteFB(); ?>"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="<?php echo $acm->SiteTwitter(); ?>"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="<?php echo $acm->SiteLinkedIn(); ?>"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="<?php echo $acm->SiteGplus(); ?>"><i class="fa fa-linkedin"></i></a>
                </li>
              </ul>
              <!-- End Social Links -->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header" style="margin-bottom:2%;">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php">
              <h1><?php echo $acm->SiteName(); ?></h1>
              <small><?php echo $acm->AdminEmail(); ?></small>
            </a>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Stat Search -->
            <div class="search-side">
              <a class="show-search"><i class="fa fa-search"></i></a>
              <div class="search-form">
                <form autocomplete="on" role="search" method="get" class="searchform" action="#">
                  <input type="text" class="input-lg" name="s" id="s" placeholder="Search the site..." onkeyup="showResult(this.value)"/>
                  <div id="livesearch"></div>
                </form>
              </div>
            </div>
            <!-- End Search -->
            <!-- Start Navigation List -->
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" style="margin-top:2%;" >

              <ul class="nav navbar-nav" >
                <li>
                  <a class="active" href="index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
                </li>
                <li>
                  <a href="#"><span class="pull-left"><i class="fa fa-group"></i></span>&nbsp;&nbsp;Authors</a>
                  <ul class="dropdown">
                    <li><a href="call_for.php">Call for Contributions <span class="pull-right"><i class="fa fa-bullhorn"></i></span></a>
                    </li>
                    <li><a href="instructions.php">Presentation <br/> Instructions <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
                    </li>
                    <li><a href="submission.php">Paper Submission <span class="pull-right"><i class="fa fa-upload"></i></span></a>
                    </li>

                    <li><a href="dates.php">Important Dates<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><span class="pull-left"><i class="fa fa-calendar-check-o"></i></span>&nbsp;&nbsp;Programs</a>
                  <ul class="dropdown">
                    <li><a href="keynotes.php">Keynotes &amp; Awards Presentation<span class="pull-right"><i class="fa fa-microphone"></i></span></a>
                    </li>
                    <li><a href="paper_presentation.php">Paper Presentation<span class="pull-right"><i class="fa fa-newspaper-o"></i></span></a>
                    </li> 
                    <li><a href="poster_presentation.php">Poster Presentation<span class="pull-right"><i class="fa fa-image"></i></span></a>
                    </li>
                    <li><a href="schedule.php">Event Schedule<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                    </li>

                    <li><a href="register.php">Event Registration<span class="pull-right"><i class="fa fa-edit"></i></span></a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><span class="pull-left"><i class="fa fa-sitemap"></i></span>&nbsp;&nbsp;Organisation</a>
                  <ul class="dropdown">
                    <li><a href="committee.php?ref_id=1"> Organising Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
                    </li>

                    <li><a href="committee.php?ref_id=2"> Advisory Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
                    </li>

                  </ul>
                </li>
                <li><a href="#"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;Local Information</a>
                  <ul class="dropdown">
                    <li><a href="venue.php">Conference Venue<span class="pull-right"><i class="fa fa-location-arrow"></i></span></a>
                    </li>

                    <li><a href="location.php">Conference Location<span class="pull-right"><i class="fa fa-map-marker"></i></span></a>
                    </li>


                    <li><a href="accessing.php">Accessing Sangli<span class="pull-right"><i class="fa fa-plane"></i></span></a>
                    </li>
                  </ul>
                </li>

                <li><a href="gallery.php"><span class="pull-left"><i class="fa fa-image"></i></span>&nbsp;&nbsp;Gallery</a>
                </li>

                <li><a href="about.php"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About</a>
                </li>


                <li><a href="contact.php"><span class="pull-left"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Contact</a>
                </li>

                <?php if($acm->CheckLogin()){ 
                  ?>
                  <li><a href="#"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;<?php echo $acm->UserFullName(); ?></a>
                    <ul class="dropdown">
                      <li><a href="<?php echo $acm->UserRole();?>/index.php">Dashboard <span class="pull-right"><i class="fa fa-dashboard"></i></span></a>
                      </li>
                      <li><a href="<?php echo $acm->UserRole();?>/settings.php">Settings <span class="pull-right"><i class="fa fa-gears"></i></span></a>
                      </li>
                      <li><a href="login.php?logout=true">Logout <span class="pull-right"><i class="fa fa-sign-out"></i></span></a>
                      </li>
                    </ul>
                  </li>
                <?php } else{ ?>

                  <li><a href="register_rsc.php"><span class="pull-left"><i class="fa fa-sign-in"></i></span>&nbsp;&nbsp;Register</a>
                  </li>
                <?php } ?>
              </ul>
            </div>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a class="active" href="index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
          </li>
          <li>
            <a href="#"><span class="pull-left"><i class="fa fa-group"></i></span>&nbsp;&nbsp;Authors</a>
            <ul class="dropdown">
              <li><a href="call_for.php">Call for Contributions <span class="pull-right"><i class="fa fa-bullhorn"></i></span></a>
              </li>
              <li><a href="instructions.php">Presentation <br/> Instructions <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
              </li>
              <li><a href="submission.php">Paper Submission <span class="pull-right"><i class="fa fa-upload"></i></span></a>
              </li>

              <li><a href="dates.php">Important Dates<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
              </li>
            </ul>
          </li>
          <li><a href="#"><span class="pull-left"><i class="fa fa-calendar-check-o"></i></span>&nbsp;&nbsp;Programs</a>
            <ul class="dropdown">
              <li><a href="keynotes.php"> Keynotes &amp; Awards Presentation<span class="pull-right"><i class="fa fa-microphone"></i></span></a>
              </li>
              <li><a href="paper_presentation.php">Paper Presentation<span class="pull-right"><i class="fa fa-newspaper-o"></i></span></a>
              </li> 
              <li><a href="poster_presentation.php">Poster Presentation<span class="pull-right"><i class="fa fa-image"></i></span></a>
              </li>
              <li><a href="schedule.php">Event Schedule<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
              </li>

              <li><a href="register.php">Event Registration<span class="pull-right"><i class="fa fa-edit"></i></span></a>
              </li>
            </ul>
          </li>
          <li><a href="#"><span class="pull-left"><i class="fa fa-sitemap"></i></span>&nbsp;&nbsp;Organisation</a>
            <ul class="dropdown">
              <li><a href="committee.php?ref_id=1"> Organising Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
              </li>

              <li><a href="committee.php?ref_id=2"> Technical Program Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
              </li>

            </ul>
          </li>
          <li><a href="#"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;Local Information</a>
            <ul class="dropdown">
              <li><a href="venue.php">Conference Venue<span class="pull-right"><i class="fa fa-location-arrow"></i></span></a>
              </li>

              <li><a href="location.php">Conference Location<span class="pull-right"><i class="fa fa-map-marker"></i></span></a>
              </li>


              <li><a href="accessing.php">Accessing Sangli<span class="pull-right"><i class="fa fa-plane"></i></span></a>
              </li>
            </ul>
          </li>

          <li><a href="gallery.php"><span class="pull-left"><i class="fa fa-image"></i></span>&nbsp;&nbsp;Gallery</a>
          </li>
          <li><a href="about.php"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About</a>
          </li>
          <li><a href="contact.php"><span class="pull-left"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Contact</a>
          </li>

          <?php if($acm->CheckLogin()){ 
            ?>
            <li><a href="#"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;<?php echo $acm->UserFullName(); ?></a>
              <ul class="dropdown">
                <li><a href="<?php echo $acm->UserRole();?>/index.php">Dashboard <span class="pull-right"><i class="fa fa-dashboard"></i></span></a>
                </li>
                <li><a href="<?php echo $acm->UserRole();?>/settings.php">Settings <span class="pull-right"><i class="fa fa-gears"></i></span></a>
                </li>
                <li><a href="login.php?logout=true">Logout <span class="pull-right"><i class="fa fa-sign-out"></i></span></a>
                </li>
              </ul>
            </li>
          <?php } else{ ?>
            <li><a href="register_rsc.php"><span class="pull-left"><i class="fa fa-sign-in"></i></span>&nbsp;&nbsp;Register</a>
            </li>
          <?php } ?>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->

    <!-- <marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();"><span class="badge badge-secondary">New</span><b>Welcome to the 5th National Research Symposium on Computing at WCE, A Co-located activity of <a href="http://www.iccet2020.in/" target="_blank">ICCET-2020</a></b></marquee> -->
    <!--marquee><a href="#" class="badge badge-primary">New</a><b>The submissions for possible inclusion in IJCSE/Springer and e-proceeding have been closed. <a href="#" class="badge badge-primary">New</a> Authors can download consent form and templates from notification section</b> &nbsp&nbsp</marquee>-->
    <!--
    <marquee><a href="#" class="badge badge-primary">New</a><a href="asset/selectedlist.pdf"><b>List of papers selected for Oral and Poster presentation</b></a><a href="#" class="badge badge-primary">New</a><a href="rsc-schedule19.pdf"><b>RSC 2019 Schedule</b></a></marquee> 
    -->
    <!-- <marquee> <a href="#" class="badge badge-primary">New</a> <b>RSC 2021 Schedule will be uploaded soon on the website.</b> </marquee> -->

     <!--
    <marquee behavior="alternate"><a href="#" class="badge badge-primary">New</a><b>Submission of RSC 2019 for all categories is closed</b> &nbsp&nbsp<h3></marquee>
    -->
<marquee behavior="alternate"><a href="#" class="badge badge-primary">New</a><b>50% fee would be waived for registered IET members only in all categories</b> &nbsp&nbsp<h3></marquee>
      <!-- Start Home Page Slider -->
      <section id="home">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
            <li data-target="#main-slide" data-slide-to="3"></li>
            <li data-target="#main-slide" data-slide-to="4"></li>
            <li data-target="#main-slide" data-slide-to="5"></li>
	    <li data-target="#main-slide" data-slide-to="6"></li>
          </ol>
          <!--/ Indicators end-->

          <!-- Carousel inner -->
          <div class="carousel-inner" style="max-height:450px;">
            <div class="item active">
              <img class="img-responsive" src="images/slider/1.jpg" alt="slider">
            </div>
            <!--/ Carousel item end -->
            <div class="item">
              <img class="img-responsive" src="images/slider/2.jpg" alt="slider">
            </div>
            <div class="item">
              <img class="img-responsive" src="images/slider/3.jpg" alt="slider">
            </div>
            <div class="item">
              <img class="img-responsive" src="images/slider/4.jpg" alt="slider">
            </div>
            <div class="item">
              <img class="img-responsive" src="images/slider/5.jpg" alt="slider">
            </div>
            <div class="item">
              <img class="img-responsive" src="images/slider/6.jpg" alt="slider">
            </div>
	    <div class="item">
              <img class="img-responsive" src="images/slider/7.jpg" alt="slider">
            </div>

            <!--/ Carousel item end -->
          </div>
          <!-- Carousel inner end-->

          <!-- Controls -->
          <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
          </a>
          <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
          </a>
        </div>
        <!-- /carousel -->
      </section>
      <!-- End Home Page Slider -->


      <!-- Start Content -->
      <div id="content">

        <!-- Start News & Skill Section -->

        <div class="container" style="text-align:justify">
          <div class="row">
           <div class="col-md-8" id="whowe">

            <h1 class="accent-color">WCE Research Symposium on Computing - RSC 2021 </h1>
            <p><strong>FIFTH NATIONAL RESEARCH SYMPOSIUM ON COMPUTING <br/>National Level joint Event by WCE ACM Student Chapter and  Department of CSE and Department of IT (WCE,Sangli) and Jabalpur College of Engineering, Jabalpur <br>At Walchand College of Engineering, Sangli.</strong></p>
            <br/><br/>
            <p>At Walchand College of Engineering (WCE) Sangli, Computer Science and Engineering (CSE) Department as well as Information Technology (IT) Department are active in promoting research in advances in CSE/ IT under Association for Computing Machinery (ACM) India. This has resulted into instituting WCE-ACM chapter. First, second, third and fourth National Research Symposium was organized during Dec 19-20, 2016, Dec 15-16, 2017, Dec 21-22, 2018 and Dec 19-21, 2019 respectively at WCE and it received excellent response from researchers.</p><br>
            <p> In this series, the WCE-ACM chapter is delighted to announce its fifth National Research Symposium on Computing (RSC 2021) in March 2021 under the technical support from ACM. The WCE-ACM chapter welcomes research paper submissions from faculty, doctoral students, research scholars and industry experts who are actively working in the area of Computer Science and Engineering and allied branches.</p><br>
            <p>The RSC 2021 will provide a unique opportunity to the researchers to present their research work and will enable them to interact with renowned and experienced researchers in all areas of Computer Science and Engineering as well as Information Technology. The symposium will also provide to its participants, independent and constructive feedback about their completed/planned research work for its further improvements. The research symposium aims at establishing and promoting social and intellectual interactions among students and researchers from academia and industry. The symposium will be accompanied by prominent experts who will deliver the keynote address and will actively participate in critical discussions at the symposium. The selected papers will be forwarded for its publication in Springer's AISC series.</p><br>
          </div>


          <div class="col-md-4" id="news">
            <div class="latest-posts">

              <!-- Classic Heading -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab"><i class="icon-award-1"></i>Supported By</a></li>
                <li><a href="#tab2" data-toggle="tab"><i class="icon-beaker"></i>Publication By</a></li>
              </ul>
              <br>

              <div class="tab-content">
               <div class="tab-pane fade in active" id="tab1">
                <img src="images/iet.png" width="300" height="50" alt="ACM India" />
                <br/>
                <br/>

                <img src="images/teqip3logo.png" width="300" height="50" alt="TEQIP-III" /><br/><br/>

                <img src="images/wceacm.png" width="300" height="50" alt="WCE ACM Student Chapter" />
                <br/><br/>
		<img src="images/FinIQ.png" width="300" height="50" alt="FinIQ">
              </div>

              <div class="tab-pane fade" id="tab2">

                <!-- <h5><a href="http://www.iccet2020.in/publications.html" target="_blank"><img src="images/ICCET2020.jpg" alt="Springer" /></a></h5>
                <br/><br/> -->
		            <!-- <h5>Will be updated soon</h5> -->


                <!-- <h5><a href="http://www.ijcseonline.org/" target="_blank"><img src="images/ijcse_logo.jpg" alt="International Journal of Computer Sciences and Engineering" /></a></h5> -->
                <img src="images/iferp.png" alt="IFERP" style="width: 100px; align-self:center;">
                <br>
                <h5>1. Journal Name:- Materials Today: Proceedings <br>
                  ISSN:- 2214-7853 <br>
                  Article Processing Fee + Publication Charges:- 10000 INR 
                </h5>
                <br><br>
                <h5>
                  2. Journal Name:- IOP Conference Series: Material Science & Engineering <br>
                  ISSN:- 1757-899X <br>
                  Article Processing Fee + Publication Charges:- 10000 INR
                </h5>
                <br><br>
                <h5>
                  3. Journal Name:- Psychology and Education <br>
                  ISSN:- 0033-3077 <br>
                  Article Processing Fee + Publication Charges:- 10000 INR
                </h5>

                <br/><br/>

                <br/-->
              </div>

            </div>



          </div>

          <div class="latest-posts">

            <!-- Classic Heading -->
            <h4 class="classic-title"><span>Notifications</span></h4>

            <marquee behavior="scroll" direction="up" scrollamount="2" height="100%" vspace="10%" onmouseover="this.stop();" onmouseout="this.start();"> 
              <!--<a href="#" class="badge badge-primary">New</a>
              <b>
                <a href="asset/rsc-2019.pdf" target="_blank"> Brochure for RSC-2019 </a> --> <br> <!-- asset/Brochure.pdf -->
                <!-- <a href="#" class="badge badge-primary">New</a>
                <b>Conference Paper Template in [<a href="asset/Template_MS_Word.docm" target="_blank">MSWORD</a>] or in [<a href="https://www.springer.com/us/authors-editors/conference-proceedings/conference-proceedings-guidelines" target="_blank">LATEX</a>]</b> -->
              </b>
             
              <br>
              <a href="#" class="badge badge-primary">New</a><b>First National Research Symposium <a href="asset/RSC-2016.pdf">RSC-2016</a></b>
              <br>
              <a href="#" class="badge badge-primary">New</a><b>Second National Research Symposium <a href="asset/RSC-2017.pdf">RSC-2017</a></b><br>
              <a href="#" class="badge badge-primary">New</a><b>Third National Research Symposium <a href="asset/RSC-2018.pdf">RSC-2018</a></b><br>
	<a href="#" class="badge badge-primary">New</a><b>Fourth National Research Symposium <a href="asset/RSC 2019 Proceeding.pdf">RSC-2019</a></b><br>

              <!-- <a href="#" class="badge badge-primary">New</a><b>Guidelines for Innovative Project Showcasing <a href="asset/ips.pdf" taget="_blank">IPS-2019</a></b> -->
              <br>
              <!-- <a href="#" class="badge badge-primary">New</a><b>The <a href="asset/ieee_template.doc"> IEEE </a> and <a href="asset/latex.zip">Latex</a> template for paper submissions for IPS </a></b>
              <br>
              <a href="#" class="badge badge-primary">New</a><b><a href="asset/CTP_RSC 2019.pdf">Springer Consent To Publish Form </a></b><br-->

              <!-- <a href="#" class="badge badge-primary">New</a><b><a href="asset/CTP_DSP_DIP.doc">Copyright Form: Track-1(DSP/DIP)</a></b><br>
              <a href="#" class="badge badge-primary">New</a><b><a href="asset/CTP_Others.doc">Copyright Form: Track-2(Next Gen. Computing)</a></b><br> -->

              <!-- <a href="#" class="badge badge-primary">New</a><b><a href="asset/Reviewers Response Sheet.pdf">Response sheet on Reviewers Comments</a></b><br> -->
              <!-- <a href="" class="badge badge-primary">New</a><b><a href="asset/rsc_copyright.pdf"> RSC Copyright Consent Form</a></b></br> -->
		<a href="" class="badge badge-primary">New</a><b><a href="asset/Paper submission M.Tech Poster Submission and IPS instructions.pdf"> Paper submission M.Tech Poster Submission and IPS instructions</a></b></br>
	            </marquee>



          </div>

        </div>
      </div>

      <!-- End Call Action -->
    </div>
    <!-- .container -->
    <!-- End News & Skill Section -->


  </div>
  <!-- End Content -->


<?php
require_once("footer.php");
?>

    </div>
    <!-- End Container -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

    <script type="text/javascript" src="js/script.js"></script>
    <script>
      function showResult(str) {
        if (str.length==0) {
          document.getElementById("livesearch").innerHTML="";
          document.getElementById("livesearch").style.border="0px";
          return;
        }
        if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("livesearch").innerHTML= "<ul class='dropdown'>"+xmlhttp.responseText+"</ul>";
      document.getElementById("livesearch").style.background="#fff";
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
      document.getElementById("livesearch").style.padding="3%";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
function subscribe()
{
 if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } 
  else 
  {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {  
      document.getElementById("subscribeResponse").innerHTML = xmlhttp.responseText;
    }
  }
  var email = document.getElementById("txtEmail").value;
  if(email =="")
  {
   document.getElementById("subscribeResponse").innerHTML = "Email Cannot Be Empty!"; 
 }
 else
 {
  xmlhttp.open("GET","subscribe.php?email="+email,true);
  xmlhttp.send();
}
}
</script>
</body>

</html>
be.php?email="+email,true);
  xmlhttp.send();
}
}
</script>
</body>

</html>