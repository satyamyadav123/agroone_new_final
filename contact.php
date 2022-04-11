<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#009a4e" />
    <title>Agroone</title>
    <meta name="author" content="Arpit Porwal">
    <meta name="description" content="For all kind of agriculture and organic food website">
    <meta name="keywords" content="agroone, agriculture">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Agroone | Agriculture">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="Agroone">
    <meta property="og:title" content="Agroone">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Agroone">
    <meta name="twitter:creator" content="@Agroone">
    <meta name="twitter:title" content="Agroone">
    <meta name="twitter:description" content="Agroone | Agriculture">
    <meta name="twitter:image" content="">

    <!-- FAVICON FILES -->
    <link href="ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
    <link href="ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="ico/favicon.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="css/lineicons.css">
    <link rel="stylesheet" href="css/timeline.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/odometer.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<?php 
 ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    $msg="";
    if(isset($_POST['submit']))
    {

        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $body="Hello Agrone, <p style='line-height: 21px;'> New message has been submmited at Agrone one  by a visitor ".$name.".<br/><br/> Email : ".$email."<br/>Subject : ".$subject."<br/> Message : ".$message."</p>";
        mail("satyamy741@gmail.com","User enquiry agroneone",$body,$headers);
        $msg="<div class='alert-success'>Thanks for contacting us. We will revert back to you shortly.</div>";
    }
    
?>


<body>
    <div class="preloader"> <img src="images/preloader.gif" alt="Image"> </div>
    <!-- end preloader -->
    <div class="page-transition"></div>
    <!-- end page-transition -->
    <!-- <div class="search-box">
        <div class="inner">
            <form>
                <input type="search" placeholder="Type here to search">
                <input type="submit" value="SEARCH">
            </form>
        </div>
    </div> -->
    <!-- <aside class="side-widget">
        <div class="inner">
            <div class="logo">
                <a href="index-2.html"><img src="images/agroone.png" alt="Image"></a>
            </div>
            <div class="hide-mobile">
                <p>Wild flowers , plants and fungi are the life support for all our wildlife and their colour and character</p>
                <figure class="gallery">
                    <a href="images/slide02.jpg" data-fancybox><img src="images/slide02.jpg" alt="Image"></a>
                    <a href="images/slide03.jpg" data-fancybox><img src="images/slide03.jpg" alt="Image"></a>
                </figure>
                <h6 class="widget-title">CONTACT INFO</h6>
                <address class="address"><p>+91 7224094409<br><a href="#">agrooneindore@gmail.com</a></p></address>
                <h6 class="widget-title">FOLLOW US</h6>
                <ul class="social-media">
                    <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                    <li><a href="#"><i class="lni lni-twitter-original"></i></a></li>
                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                    <li><a href="#"><i class="lni lni-youtube"></i></a></li>
                    <li><a href="#"><i class="lni lni-pinterest"></i></a></li>
                </ul>
            </div>
            <div class="show-mobile">
                <div class="site-menu">
                    <ul>
                        <li><a href="#">What We Offer</a>
                            <ul>
                                <li><a href="services-offers.html">Services and Offers </a></li>
                                <li><a href="campaigns.html">Campaigns</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Food & Farming</a>
                            <ul>
                                <li><a href="explore-farming.html">Explore Farming</a></li>
                                <li><a href="our-work.html">Our Work</a></li>
                                <li><a href="farming-issues.html">Farming Issues</a></li>
                            </ul>
                        </li>
                        <li><a href="news.html">News</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
            <small>© 2020 Agro | Agriculture Farming Foundation</small> </div>
    </aside> -->
    <!-- end side-widget -->

    <div class="topbar">
        <div class="container">
            <div class="text"> 24/7 Emergency Services Provide</div>
            <div class="social-media"> Follow us
                <ul>
                    <li><a href="https://www.facebook.com/Agroone-105945794778196" target="_blank"><i class="lni lni-facebook-filled"></i></a></li>
                    <!-- <li><a href="#" target="_blank"><i class="lni lni-twitter-original"></i></a></li> -->
                    <li><a href="https://www.instagram.com/agro.one.indore" target="_blank"><i class="lni lni-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCKUVGEP5GK9rVgVgCYaecAA" target="_blank"><i class="lni lni-youtube"></i></a></li>
                    <!-- <li><a href="#"><i class="lni lni-pinterest"></i></a></li> -->
                </ul>
            </div>
            <div class="phone"><i class="lni lni-mobile"></i>+91 7224094409</div>
        </div>
        <!-- end container -->
    </div>
    <!-- end topbar -->
    <nav class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.html"> <img src="images/agroone.png" srcset="images/agroone.png" alt="Image"> </a>
            </div>
            <!-- end logo -->
            <div class="site-menu">
                <ul>
                    <li><a href="index.html#about-us">About us</a>
                       <!--  <ul>
                            <li><a href="services-offers.html">Services and Offers </a></li>
                            <li><a href="campaigns.html">Campaigns</a></li>
                        </ul> -->
                    </li>
                    <li><a href="index.html#products">Products</a>
                       <!--  <ul>
                            <li><a href="explore-farming.html">Explore Farming</a></li>
                            <li><a href="our-work.html">Our Work</a></li>
                            <li><a href="farming-issues.html">Farming Issues</a></li>
                        </ul> -->
                    </li>
                    <li><a href="index.html#our-services">Services</a></li>
                    <!-- <li><a href="news.html">News</a></li>
                    <li><a href="about.html">About</a></li> -->
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <!-- end site-menu -->
            <!-- <div class="search-button"><i class="lni lni-search-alt"></i></div> -->
            <!-- end search-button -->
            <!-- <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div> -->
            <!-- end hamburger-menu -->
        </div>
        <!-- end container -->
    </nav>
    <!-- end navbar -->
<header class="page-header" data-background="images/page-header-bg.jpg" data-stellar-background-ratio="0.7">
	<div class="container">
	<h2>Contact</h2>
		<p>Wild flowers, plants and fungi are the life support</p>
	</div>
	<!-- end container -->
	 <div class="parallax-element" data-stellar-ratio="2"></div>
    <!-- end parallax-element --> 
</header>
<!-- end page-header -->
<section class="content-section no-bottom-spacing" data-background="images/section-bg01.png" data-stellar-background-ratio="1.2">
  <div class="container">
    <div class="row">
		<div class="col-12">
		<div class="section-title text-left">
          <h6>Here's how you can get in touch</h6>
          <h2>Whether you're a current Countryside <br>
member or are thinking about joining <br>
us, have a question.</h2>
        </div>
			<!-- end section-title -->
		</div>
          <!-- end col-12 -->
      <div class="col-lg-6">
        <div class="contact-form">
            <form role="form" action="" method="POST">
    		  	<div class="form-group">
    				<input type="text" placeholder="Complete Name" name='name' id="name">
    			</div>
    			<!-- end form-group -->
    		  	<div class="form-group">
    				<input type="text" placeholder="E-mail Address" name="email" id="email">
    			</div>
    			<!-- end form-group -->
    		  	<div class="form-group">
    				<input type="text" placeholder="Subject" name="subject" id="subject">
    			</div>
    			<!-- end form-group -->
    		  	<div class="form-group">
    				<textarea placeholder="Message" name="message"></textarea>
    			</div>
    			<!-- end form-group -->
    			<div class="form-group">
    			<input type="submit" value="SEND MESSAGE" id="submit" name="submit">
    			</div>
           </form>
			<!-- end form-group -->
		  </div>
		  <!-- end contac-form -->
      </div>
      <!-- end col-6 -->
      <div class="col-lg-6">
		  <div class="contact-box">
		  <figure><img src="images/contact-icon01.png" alt="Image"></figure>
			  <div class="content">
			  <h6>Waiting Your Call!</h6>
			  <p>+91 7224094409<br>+91 9179347178</p>
				  </div>
			  <!-- end content -->
		  </div>
		  <!-- end contact-box -->
		    <div class="contact-box">
		  <figure><img src="images/contact-icon02.png" alt="Image"></figure>
				 <div class="content">
			  <h6>Email the editor</h6>
			  <p>agrooneindore@gmail.com</p>
					   </div>
			  <!-- end content -->
		  </div>
		  <!-- end contact-box -->
		    <div class="contact-box">
		  <figure><img src="images/contact-icon03.png" alt="Image"></figure>
				 <div class="content">
			  <h6>Registered office at</h6>
			  <p>Argo One Infront Of Shani Mandir, Nearby Power House,Sector-C, Sanwer Road Indore(M.P) 452015</p>
					   </div>
			  <!-- end content -->
		  </div>
		  <!-- end contact-box -->
      </div>
      <!-- end col-6 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end content-section -->
<div class="google-maps">
	<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=QV72+72W,%20Saidham%20Colony,%20Sector%20C,%20Sanwer%20Road%20Industrial%20Area,%20Indore,%20Madhya%20Pradesh%20452003&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
	</div>
	<!-- end google-maps -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="#"> <img src="images/agroone.png" srcset="images/agroone.png" alt="Image"> </a>
                    </div>
                    <!-- end logo -->
                    <p>Wild flowers , plants and fungi are the life support for all our wildlife and their colour and character</p>
                </div>
                <!-- end col-4 -->
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                    <h6 class="widget-title">CONTACT INFO</h6>
                    <p><i class="lni lni-phone"></i> -: +91 7224094409 ,+91 9179347178, +91 8770883010<br><i class="lni lni-envelope"></i> -: agrooneindore@gmail.com
                    </p>
                </div>
                <!-- end col-8 -->
                <div class="footer-separator"></div>
                <!-- end footer-separator -->
                <!-- <div class="col-md-4">
                    <h6 class="widget-title">WILD PLANTS</h6>
                    <ul class="footer-menu">
                        <li>Discover Wild Plants</li>
                        <li>Important Plant Areas</li>
                        <li>Issues of Plants</li>
                    </ul>
                </div> -->
                <!-- end col-4 -->
          <!--       <div class="col-md-4">
                    <h6 class="widget-title">NATURE REZERVES</h6>
                    <ul class="footer-menu">
                        <li>Ranscombe Farm</li>
                        <li>Munsary Peatlands</li>
                        <li>Cae Blaen-dyffryn</li>
                    </ul>
                </div> -->
                <!-- end col-4 -->
                <!-- <div class="col-md-4">
                    <h6 class="widget-title">CONTACT INFO</h6>
                    <p>:+91 7224094409<br>agrooneindore@gmail.com
                    </p>
                </div>
 -->                <!-- end col-4 -->
                <div class="col-12">
                    <div class="footer-bottom"> <span>© 2022 Agroone pvt. ltd. | Agriculture</span></div>
                    <!-- end footer-bottom -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </footer>
<!-- end footer --> 

<!-- JS FILES --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/swiper.min.js"></script> 
<script src="js/fancybox.min.js"></script> 
<script src="js/imagesloaded.pkgd.min.js"></script> 
<script src="js/isotope.min.js"></script> 
<script src="js/jquery.stellar.js"></script> 
<script src="js/timeline.js"></script> 
<script src="js/odometer.min.js"></script> 
<script src="js/scripts.js"></script>
</body>

<!-- Mirrored from themezinho.net/seodo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Apr 2022 18:21:37 GMT -->
</html>