<?php
require_once("./include/db_config.html");
require_once("./include/acm_membership_config.html");

 

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <link rel="stylesheet" href="css/flipclock.css">

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  <script src="js/flipclock.js"></script>

  <!-- Basic -->
  <title>WCE Research Symposium on Computing | Paper Submission</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="National Research Symposium is a two day national level research symposium organized by Department of Computer Science &amp; Engineering, Walchand College of Engineering, Sangli during 19-20 December 2016." />
  <meta name="keywords" content="National Research Symposium on Computing, RSC 2016, Research Symposium,Walchand College of Engineering, WCE Sangli, Computing, Department of Computer Science &amp; Engineering, TEQIP-II, WCE ACM Student Chapter" />

  <meta name="author" content="Harshal Khairnar - CBA Solutions" />

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
                <li><a href="mailto:  rsc2021@walchandsangli.ac.in  "><i class="fa fa-envelope-o"></i>   rsc2021@walchandsangli.ac.in  </a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i>   +91 88057 09102 | 7030226700  </a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-3">
              <!-- Start Social Links -->
              <ul class="social-list">
                <li>
                  <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="  $acm->SiteFB();  "><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="  $acm->SiteTwitter();  "><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google itl-tooltip" data-placement="bottom" title="Google Plus" href="  $acm->SiteLinkedIn();  "><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="  $acm->SiteGplus();  "><i class="fa fa-linkedin"></i></a>
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
            <a class="navbar-brand" href="index.html">
              <h1>  <img src="images/iferp.png" alt="IFERP" style="width:100px; padding-right:2%;"> WCE Research Symposium on Computing - RSC 2021  </h1>
              <small>  rsc2021@walchandsangli.ac.in  </small>
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
                  <a href="index.html"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
                </li>
                <li>
                  <a href="#" class="active"><span class="pull-left"><i class="fa fa-group"></i></span>&nbsp;&nbsp;Authors</a>
                  <ul class="dropdown">
                    <li><a href="call_for.html" >Call for Contributions <span class="pull-right"><i class="fa fa-bullhorn"></i></span></a>
                    </li>
                    <li><a href="instructions.html">Presentation <br/> Instructions <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
                    </li>
                    <li><a href="submission.html" class="active">Paper Submission <span class="pull-right"><i class="fa fa-upload"></i></span></a>
                    </li>
                    
                    <li><a href="dates.html">Important Dates<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><span class="pull-left"><i class="fa fa-calendar-check-o"></i></span>&nbsp;&nbsp;Programs</a>
                  <ul class="dropdown">
                    <li><a href="keynotes.html">Keynotes &amp; Awards Presentation<span class="pull-right"><i class="fa fa-microphone"></i></span></a>
                    </li>
                    <li><a href="paper_presentation.html">Paper Presentation<span class="pull-right"><i class="fa fa-newspaper-o"></i></span></a>
                    </li> 
                    <li><a href="poster_presentation.html">Poster Presentation<span class="pull-right"><i class="fa fa-image"></i></span></a>
                    </li>
                    <li><a href="schedule.html">Event Schedule<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
                    </li>
                    
                    <li><a href="register.html">Event Registration<span class="pull-right"><i class="fa fa-edit"></i></span></a>
                    </li>
                  </ul>
                </li>
                <li><a href="#"><span class="pull-left"><i class="fa fa-sitemap"></i></span>&nbsp;&nbsp;Organisation</a>
                  <ul class="dropdown">
                    <li><a href="committee.html?ref_id=1"> Organising Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
                    </li>
                    
                    <li><a href="committee.html?ref_id=2"> Advisory Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
                    </li>
                    
                  </ul>
                </li>
                <li><a href="#"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;Local Information</a>
                  <ul class="dropdown">
                    <li><a href="venue.html">Conference Venue<span class="pull-right"><i class="fa fa-location-arrow"></i></span></a>
                    </li>
                    
                    <li><a href="location.html">Conference Location<span class="pull-right"><i class="fa fa-map-marker"></i></span></a>
                    </li>
                    

                    <li><a href="accessing.html">Accessing Sangli<span class="pull-right"><i class="fa fa-plane"></i></span></a>
                    </li>
                  </ul>
                </li>

                <li><a href="gallery.html"><span class="pull-left"><i class="fa fa-image"></i></span>&nbsp;&nbsp;Gallery</a>
                </li>
                <li><a href="about.html"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About</a>
                </li>
                <li><a href="contact.html"><span class="pull-left"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Contact</a>
                </li>
                <?php if($acm->CheckLogin()){ 
                  
                   
                  <li><a href="#"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;  $acm->UserFullName();  </a>
                    <ul class="dropdown">
                      <li><a href="  $acm->UserRole(); /index.html">Dashboard <span class="pull-right"><i class="fa fa-dashboard"></i></span></a>
                      </li>
                      <li><a href="  $acm->UserRole(); /settings.html">Settings <span class="pull-right"><i class="fa fa-gears"></i></span></a>
                      </li>
                      <li><a href="login.html?logout=true">Logout <span class="pull-right"><i class="fa fa-sign-out"></i></span></a>
                      </li>
                    </ul>
                  </li>
                <?php } else{  
                  <li><a href="register_rsc.html"><span class="pull-left"><i class="fa fa-sign-in"></i></span>&nbsp;&nbsp;Register</a>
                  </li>
                <?php }  
              </ul>
            </div>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu">
          <li>
            <a href="index.html"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
          </li>
          <li>
            <a href="#" class="active"><span class="pull-left"><i class="fa fa-group"></i></span>&nbsp;&nbsp;Authors</a>
            <ul class="dropdown">
              <li><a href="call_for.html">Call for Contributions <span class="pull-right"><i class="fa fa-bullhorn"></i></span></a>
              </li>
              <li><a href="instructions.html">Presentation <br/> Instructions <span class="pull-right"><i class="fa fa-info-circle"></i></span></a>
              </li>
              <li><a href="submission.html"  class="active">Paper Submission <span class="pull-right"><i class="fa fa-upload"></i></span></a>
              </li>
              
              <li><a href="dates.html">Important Dates<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
              </li>
            </ul>
          </li>
          <li><a href="#"><span class="pull-left"><i class="fa fa-calendar-check-o"></i></span>&nbsp;&nbsp;Programs</a>
            <ul class="dropdown">
              <li><a href="keynotes.html">Keynotes &amp; Awards Presentation<span class="pull-right"><i class="fa fa-microphone"></i></span></a>
              </li>
              <li><a href="paper_presentation.html">Paper Presentation<span class="pull-right"><i class="fa fa-newspaper-o"></i></span></a>
              </li> 
              <li><a href="poster_presentation.html">Poster Presentation<span class="pull-right"><i class="fa fa-image"></i></span></a>
              </li>
              <li><a href="schedule.html">Event Schedule<span class="pull-right"><i class="fa fa-calendar"></i></span></a>
              </li>

              <li><a href="register.html">Event Registration<span class="pull-right"><i class="fa fa-edit"></i></span></a>
              </li>
            </ul>
          </li>
          <li><a href="#"><span class="pull-left"><i class="fa fa-sitemap"></i></span>&nbsp;&nbsp;Organisation</a>
            <ul class="dropdown">
              <li><a href="committee.html?ref_id=1"> Organising Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
              </li>
              
              <li><a href="committee.html?ref_id=2"> Technical Program Committee<span class="pull-right"><i class="fa fa-group"></i></span></a>
              </li>
              
            </ul>
          </li>
          <li><a href="#"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;Local Information</a>
            <ul class="dropdown">
              <li><a href="venue.html">Conference Venue<span class="pull-right"><i class="fa fa-location-arrow"></i></span></a>
              </li>
              
              <li><a href="location.html">Conference Location<span class="pull-right"><i class="fa fa-map-marker"></i></span></a>
              </li>
              

              <li><a href="accessing.html">Accessing Sangli<span class="pull-right"><i class="fa fa-plane"></i></span></a>
              </li>
            </ul>
          </li>

          <li><a href="gallery.html"><span class="pull-left"><i class="fa fa-image"></i></span>&nbsp;&nbsp;Gallery</a>
          </li>
          <li><a href="about.html"><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About</a>
          </li>
          <li><a href="contact.html"><span class="pull-left"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Contact</a>
          </li>
          <?php if($acm->CheckLogin()){ 
            
             
            <li><a href="#"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;  $acm->UserFullName();  </a>
              <ul class="dropdown">
                <li><a href="  $acm->UserRole(); /index.html">Dashboard <span class="pull-right"><i class="fa fa-dashboard"></i></span></a>
                </li>
                <li><a href="  $acm->UserRole(); /settings.html">Settings <span class="pull-right"><i class="fa fa-gears"></i></span></a>
                </li>
                <li><a href="login.html?logout=true">Logout <span class="pull-right"><i class="fa fa-sign-out"></i></span></a>
                </li>
              </ul>
            </li>
          <?php } else{  
            <li><a href="register_rsc.html"><span class="pull-left"><i class="fa fa-sign-in"></i></span>&nbsp;&nbsp;Register</a>
            </li>
          <?php }  
          
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->


    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Paper Submission</h2>
            <p>Feel Free To Get In Touch</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="index.html">Home</a></li>
              <li><b>Authors</b></li>
              <li>Paper Submission</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->
    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">

          <div class="col-md-9">
             <div class="row">
             <div class="col-sm-12">
              <!-- <div class="alert alert-success alert-dismissible">
                <h3>The Submissions portal is yet to open. For further updates stay tuned !.!.! <br/></h3>
              </div> -->
                </div>
              </div>
              
              <div class="col-md-9">
               <div class="row">
                <div class="col-sm-12">

               <!-- <div class="alert alert-danger">
                  <h3>
                    The paper submission for possible inclusion in Springer / e-proceedings and Innovative project showcasing have been closed.  The submissions for Innovative Project Showcasing is open till 18 November 2018 
                 </h3>
               </div> -->

              <div>
                <h4>While submitting your paper through easy chair please mention your category of submission either A, B ,or C in the title section</h4>
                <br>
                <div>
                  <ul>
                    <li>Category A: for Paper Submission</li>
                    <li>Category B: for Poster Submission</li>
                    <li>Category C: IPS Submission</li>
                  </ul>
                </div>
                <br>
                <img src="/images/Sub.jpg" alt="Submission">
              </div>
               <div class="alert alert-success alert-dismissible">
                <h3><a href="https://easychair.org/conferences/?conf=rsc2021" target="_blank">Click Here</a> for submission of papers, RSC 2021</h3>
                </div> 
              </div>
            </div>


          <!--div class="row">
            <div class="col-sm-12">
              <div class="alert alert-success alert-dismissible">
                <h3><i class="fa fa-download"></i> Download Template for Paper<br/>
                  <a href="IJCSE_Paper_Template.doc">IJCSE_Paper_Template.doc</a></h3>
              </div>
                </div>
            </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-success alert-dismissible">
                <h3><i class="fa fa-download"></i> Download Copyright Form <br/>
                  <a href="IJCSE_Copyright_Form.pdf">IJCSE_Copyright_Form.pdf</a></h3>
              </div>
                </div>
              </div-->


            </div>
            <div class="col-md-3 sidebar right-sidebar">
              <!-- Categories Widget -->
              <div class="widget widget-categories">
                <h4>Related Links <span class="head-line"></span></h4>
                <ul>

                  <li>
                    <a href="call_for.html">Call for Contributions</a>
                  </li>

                  <li>
                    <a href="instructions.html">Presentation Instructions</a>
                  </li>

                  <li>
                    <a href="dates.html">Important Dates</a>
                  </li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End content -->

 <?php
require_once("footer.html");
 

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
  xmlhttp.open("GET","livesearch.html?q="+str,true);
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
  xmlhttp.open("GET","subscribe.html?email="+email,true);
  xmlhttp.send();
}
}

<script type="text/javascript">
var clock;

$(document).ready(function() {
 var clock;

 clock = $('.clock').FlipClock({
  clockFace: 'DailyCounter',
  autoStart: false,
  callbacks: {
   stop: function() {
    $('.message').html('The clock has stopped!')
  }
}
});
 
 clock.setTime(new Date(2018,08,24,23,59,59).getTime());
 clock.setCountdown(true);
 clock.start();

});
</script>

</script>
</body>

</html>
