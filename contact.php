<?php 
error_reporting(0);
if(isset($_POST['submit']))
{
	$to='icracee17@gmail.com';
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$headers='From:'.$_POST['email'];
	
	if(mail($to,$subject,$message,$headers))
	{
		echo "<script>";
		echo "alert('Thank you for contacting us we will reach to you soon...')";
		echo "</script>";
	}
	else
	{
		echo "<script>";
		echo "alert('Something went wrong . Please try again...')";
		echo "</script>";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Contact</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/logo.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

   
  
  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
     <header id="header">
     <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
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
              <a class="navbar-brand" href="index.html">RACEE<span>2017</span></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
					<li>
				 <a href="index.html" >Home</a>
                </li>
				 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Imp.information<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="call_for_papers.html">Call for papers</a></li>
                    <li><a href="theme.html">Themes of Conference</a></li>
                    <li><a href="registrations.html">Registration and Payment</a></li>
					
                  </ul>
                </li>   
				 <li class="dropdown">
                  <a href="persons.html">Committee</a>
                  
                </li> 
				  	
                <li><a href="gallery.html">Gallery</a></li>                
                

                <li><a href="contact.php">Contact</a></li>
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner" style="background-image:url('img/pic3.jpg');">
      <h2>Contact</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">We are proud to be Walchandian</h2>
			  <h4 class="title_two">as a civilian we pave the roads for others</h4>
              <span></span> 
              <p></p>
            </div>
          </div>
       </div>
       <div class="row">
         <div class="col-lg-8 col-md-8 col-sm-8">
           <div class="contact_form wow fadeInLeft">
              <form class="submitphoto_form" method="post" action="contact.php" enctype="multipart/form-data">
                <input type="text" class="wp-form-control wpcf7-text" name="name" placeholder="Your name">
                <input type="mail" class="wp-form-control wpcf7-email" name="email" placeholder="Email address">          
                <input type="text" class="wp-form-control wpcf7-text" name="subject" placeholder="Subject">
                <textarea class="wp-form-control wpcf7-textarea" cols="30" rows="10" name="message" placeholder="What would you like to tell us"></textarea>
                <input type="submit" value="Submit" name="submit" class="wpcf7-submit">
              </form>
           </div>
         </div>
         <div class="col-lg-4 col-md-4 col-sm-4">
           <div class="contact_address wow fadeInRight">
             <h3>Address</h3>
             <div class="address_group">
			 <p>Department of Civil Engineering,</p>
			  <p>Walchand College Of Engineering,</p>
               <p>Vishrambagh,Sangli 416 415</p>
               <p>Phone: (0233) 2300330</p>
               <p>Email:icracee17@walchandsangli.ac.in</p>
             </div>
             <div class="address_group">
              <ul class="footer_social">
                <li><a href="https://www.facebook.com/Civil-DepartmentWCESangli-250199982068871/" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#" class="soc_tooltip" title="" data-placement="top" data-toggle="tooltip" data-original-title="Google+"><i class="fa fa-google-plus"></i></a></li>
                </ul>
             </div>
           </div>
         </div>
       </div>
      </div>
    </section>
    <!--=========== END CONTACT SECTION ================-->

    <!--=========== BEGIN GOOGLE MAP SECTION ================-->
    <section id="googleMap">
      <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=Walchand+College+of+Engineering,+Sangli,+Maharashtra,+India&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe>
    </section>
    <!--=========== END GOOGLE MAP SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
   <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Links</h3>
                <ul class="footer_widget_nav">
                  <li><a href="call_for_papers.html">Call For Papers</a></li>
                  <li><a href="registrations.html">Registration</a></li>
                  <li><a href="registrations.html">Payment Details</a></li>
                  
                </ul>
              </div>
            </div>
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Others</h3>
                <ul class="footer_widget_nav">
                  <li><a href="theme.html">Themes of Conference</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  
                </ul>
              </div>
            </div>
            <div class="col-ld-4  col-md-4 col-sm-4">
              <div class="single_footer_widget">
                <h3>Connect Us On</h3>
               <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="https://www.facebook.com/Civil-DepartmentWCESangli-250199982068871/"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Developed By - Shubham Anil Hupare</p>

              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p><a href="http://walchandsangli.ac.in" rel="nofollow">Walchand College of Engg. Sangli</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
  <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

  </body>
</html>