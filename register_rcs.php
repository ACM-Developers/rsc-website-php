<?php 

require_once("./include/db_config.php");
require_once("./include/acm_membership_config.php");

ob_flush();
if(!isset($_SESSION)){ session_start(); }

if(isset($_POST['submitted']))
{
 if($acm->Login())
 {
  $acm->RedirectToURL("index.php"); 
}
}
if(isset($_GET['logout']))
  { if($_GET['logout'] == "true")
{
  $acm->LogOut();
}
}


if($acm->CheckLogin())
{
  header("Location: index.php");
}
?>


<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>WCE Research Symposium on Computing | Login</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="National Research Symposium is a two day national level research symposium organized by Department of Computer Science &amp; Engineering, Walchand College of Engineering, Sangli during 19-20 December 2018." />
  <meta name="keywords" content="National Research Symposium on Computing, RSC 2018, Research Symposium,Walchand College of Engineering, WCE Sangli, Computing, Department of Computer Science &amp; Engineering, TEQIP-II, WCE ACM Student Chapter" />

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
                <li><a href="mailto:rsc2021@walchandsangli.ac.in"><i class="fa fa-envelope-o"></i> rsc2021@walchandsangli.ac.in</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +91 88057 09102 | 7030226700</a>
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
                  <a href="index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
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
                  <li><a href="#" class="active"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;<?php echo $acm->UserFullName(); ?></a>
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
          <a href="index.php"><span class="pull-left"><i class="fa fa-home"></i></span>&nbsp;&nbsp;Home</a>
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
        <li><a href="about.php" ><span class="pull-left"><i class="fa fa-info-circle"></i></span>&nbsp;&nbsp;About</a>
        </li>
        <li><a href="contact.php"><span class="pull-left"><i class="fa fa-envelope"></i></span>&nbsp;&nbsp;Contact</a>
        </li>
        <?php if($acm->CheckLogin()){ 

          ?>
          <li><a href="#" class="active"><span class="pull-left"><i class="fa fa-user"></i></span>&nbsp;&nbsp;<?php echo $acm->UserFullName(); ?></a>
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


  <!-- Start Page Banner -->
  <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>Register</h2>
          <p>We Are WCE Research Symposium</p>
        </div>
        <div class="col-md-6">
          <ul class="breadcrumbs">
            <li><a href="index.php">Home</a></li>
            <li>Register</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Banner -->
  



  <!-- Start Content -->
  <div id="content">
    <?php
    if (isset($_POST['submit'])) {
      extract($_POST);
      move_uploaded_file($_FILES["proof"]["tmp_name"], 'upload/'.$_FILES["proof"]["name"]);
      $sql="insert into register VALUES('".$paper_id."','".$paper_title."','".$category."','".$name."','".$mobile."','".$alternate."','".$email."','".$address1."','".$address2."','".$college."','".$designation."','".$guide_name."','".$affiliation."','".$guide_designation."','".$guide_contact."','".$guide_email."',".$amount.",'".$mode."','".$bank_details."','".$transaction."','".$date."','upload/".$_FILES['proof']['name']."',".$count.")";
      if (mysqli_query($conn,$sql)) {
        ?>
        <p class="alert alert-success">Registered Successfully</p>
        <?php
      }else{
        ?>
        <p class="alert alert-danger">Something Went Wrong</p>
        <?php
      }
    }
    ?>
    <div class="container">
      <div class="page-content">
        <h4>Registration Fee Details</h4>
        <table class="table table-striped">
          <thead>
            <th>Registration Type</th>
            <th class="text-center">Early Bird Registeration</th>
            <th class="text-center">Late Registeration</th>
          </thead>
          <tr>
            <td>Academia/Students</td>
            <td class="text-center">INR 1000</td>
            <td class="text-center">INR 1500</td>
          </tr>
          <tr>
            <td>Industry Personnel</td>
            <td class="text-center">INR 2000</td>
            <td class="text-center">INR 2500</td>
          </tr>
          <tr>
            <td>Attendee</td>
            <td colspan="2" class="text-center">INR 800</td>
          </tr>
          <tr>
            <td>Co-Author</td>
            <td colspan="2" class="text-center">INR 800</td>
          </tr>
	        <!-- <tr>
                <td>Innovative Project Showcasing</td>
                <td colspan="2" class="text-center">300</td>
            </tr> -->
        </table>
        <h5><sup>*</sup>50% fee would be waived for registered IET members only in all categories
        <hr>
        <h4 class="classic-title"><span>Register for RSC/IPS</span></h4>
        Â Payment of appropriate registration fee can be initiated in favour of (Bank Account Details):
        Â <table class="table table-light">
          <tr>
            <td>Account Number:</td>
            <td>150720100000002</td>
          </tr>
          <tr>
            <td>Account Name:</td>
            <td>Director, Walchand College of Engineering Vishrambag, Sangli - 416415</td>
          </tr>
          <tr>
            <td>Name of Bank: </td>
            <td>Bank of India, Vishrambag, Sangli</td>
          </tr>
          <tr>
            <td>IFSC Code:</td>
            <td> BKID0001507</td>
          </tr>
          <tr>
            <td>MICR Code:</td>
            <td>416013154</td>
          </tr>
          <tr>
            <td>Branch Code:</td>
            <td>BKID001507</td>
          </tr>
        </table>
        <hr>
        <form method="POST" action="" enctype="multipart/form-data">
          <h5 class="classic-title"><span>1.) Paper Details</span></h5>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="usr">Paper Id:</label>
              <input type="text" class="form-control" id="usr" name="paper_id" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="title">Paper Title:</label>
              <input type="text" class="form-control" id="title" name="paper_title" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="sel1">Category</label>
              <select class="form-control" name="category" id="sel1" required="">
                <option value="Oral">Oral</option>
                <option value="Poster">Poster</option>
                <option value="Innovative Project Showcase">Innovative Project Showcase</option>
              </select>
            </div>
          </div>
          <hr>
          <h5 class="classic-title"><span>2.) Author Details</span></h5>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" name="name" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="mobile">Mobile No:</label>
              <input type="text" class="form-control" id="mobile" name="mobile" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="alternate">Alternate Contact:</label>
              <input type="text" class="form-control" id="alternate" name="alternate">
            </div>
            <div class="form-group col-md-6">
              <label for="email">Email Id:</label>
              <input type="email" class="form-control" id="email" name="email" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="address1">Address Line 1:</label>
              <input type="text" class="form-control" id="address1" name="address1">
            </div>
            <div class="form-group col-md-6">
              <label for="address2">Address Line 2:</label>
              <input type="text" class="form-control" id="address2" name="address2">
            </div>
          </div>
          <hr>
          <h5 class="classic-title"><span>3.) Affiliation</span></h5>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="college">College/University/Company:</label>
              <input type="text" class="form-control" id="college" name="college" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="college">Designation:</label>
              <select class="form-control" name="designation" id="college" required="">
                <option>Student</option>
                <option>Asst. Professor</option>
                <option>Associate Professor</option>
                <option>Professor</option>
                <option>Research Associate</option>
                <option>Other</option>
              </select>
            </div>
            <div class="form-group col-md-6">
              <label for="guide_name">Guide Name:</label>
              <input type="text" class="form-control" id="guide_name" name="guide_name">
            </div>
            <div class="form-group col-md-6">
              <label for="affiliation">Guide Affiliation:</label>
              <input type="text" class="form-control" id="affiliation" name="affiliation">
            </div>
            <div class="form-group col-md-6">
              <label for="guide_designation">Guide Designation:</label>
              <input type="text" class="form-control" id="guide_designation" name="guide_designation">
            </div>
            <div class="form-group col-md-6">
              <label for="guide_contact">Guide Contact:</label>
              <input type="text" class="form-control" id="guide_contact" name="guide_contact">
            </div>
            <div class="form-group col-md-6">
              <label for="guide_email">Guide Email:</label>
              <input type="email" class="form-control" id="guide_email" name="guide_email">
            </div>
          </div>
          <hr>
          <h5 class="classic-title"><span>4.) Payment Details</span></h5>
          <div class="row">
            <div class="form-group col-md-6">
              <label for="amount">Amount:</label>
              <input type="text" class="form-control" id="amount" name="amount" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="mode">Transfer Mode:</label>
              <input type="text" class="form-control" id="mode" name="mode" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="bank_details">Bank Details:</label>
              <input type="text" class="form-control" id="bank_details" name="bank_details" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="transaction">Transaction Id:</label>
              <input type="text" class="form-control" id="transaction" name="transaction" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="date">Date of Transfer:</label>
              <input type="Date" class="form-control" id="date" name="date" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="proof">Proof of Payment:</label>
              <input type="file" class="form-control" id="proof" name="proof" required="">
            </div>
          </div>
          <hr>
          <h5 class="classic-title"><span>5.) Other Details</span></h5>
          <div class="form-inline">
            <div class="form-group col-md-10">
              <label for="count">No of Persons attending the event along with you?(Including your Co-Author/s) :</label>
              <input type="text" class="form-control pull-right" id="count" name="count" required="">
            </div>
          </div>
          <br><br>
          <input type="submit" class="btn btn-primary pull-right" name="submit" value="Register">
        </form>
      </div>
    </div>
  </div>
  <!-- End content -->
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
