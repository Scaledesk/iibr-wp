<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IIBR</title>
	<!-- Bootstrap core CSS -->
	<link href="<?php echo bloginfo('template_url');?>/css/bootstrap.min.css" rel="stylesheet">
	<!-- Full Calender CSS -->
	<link href="<?php echo bloginfo('template_url');?>/css/fullcalendar.css" rel="stylesheet">
	<!-- Owl Carousel CSS -->
	<link href="<?php echo bloginfo('template_url');?>/css/owl.carousel.css" rel="stylesheet">
	<!-- Pretty Photo CSS -->
	<link href="<?php echo bloginfo('template_url');?>/css/prettyPhoto.css" rel="stylesheet">
	<!-- Bx-Slider StyleSheet CSS -->
	<link href="<?php echo bloginfo('template_url');?>/css/jquery.bxslider.css" rel="stylesheet">
	<!-- Font Awesome StyleSheet CSS -->
	<link href="<?php echo bloginfo('template_url');?>/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo bloginfo('template_url');?>/svg/style.css" rel="stylesheet">
	<!-- Widget CSS -->
	<link href="<?php echo bloginfo('template_url');?>/css/widget.css" rel="stylesheet">
	<!-- Typography CSS -->
	<link href="<?php echo bloginfo('template_url');?>/css/typography.css" rel="stylesheet">
	<!-- Shortcodes CSS -->
	<link href="<?php echo bloginfo('template_url');?>/css/shortcodes.css" rel="stylesheet">
	<!-- Custom Main StyleSheet CSS -->
	<link href="<?php echo bloginfo('template_url');?>/style.css" rel="stylesheet">
	<!-- Color CSS -->
	<link href="<?php echo bloginfo('template_url');?>/css/color.css" rel="stylesheet">
	<!-- Responsive CSS -->
	<link href="<?php echo bloginfo('template_url');?>/css/responsive.css" rel="stylesheet">
	<!-- SELECT MENU -->
	<link href="<?php echo bloginfo('template_url');?>/css/selectric.css" rel="stylesheet">
	<!-- SIDE MENU -->
	<link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/jquery.sidr.dark.css">
    <link href="<?php echo bloginfo('template_url');?>/css/styletheme.css" rel="stylesheet">

     <link href="<?php echo bloginfo('template_url');?>/css/owl.theme.css" rel="stylesheet">
   

   <style type="text/css">

#facebook{ color : #3b5998 ; }
#twitter{ color : #1da1f2 ; }
#instagram{ color : #c13584 ; }
#google{ color : #dd4b39 ; }
 


</style>



</head>

<body>
	<!--KF KODE WRAPPER WRAP START-->
    <div class="kode_wrapper">
    <!-- register Modal -->
    <div class="modal fade" id="reg-box" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
            	<!--SIGNIN AS USER START-->
                <div class="user-box">
                	<h2>Sign up as a User</h2>
                    <!--FORM FIELD START-->
                    <div class="form">
                        <div class="input-container">
                            <input type="text" placeholder="Name">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="input-container">
                            <input type="text" placeholder="E-mail">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="input-container">
                            <input type="password" placeholder="Password">
                            <i class="fa fa-unlock"></i>
                        </div>
                        <div class="input-container">
                            <label>
                                <span class="radio">
                                    <input type="checkbox" name="foo" value="1" checked>
                                    <span class="radio-value" aria-hidden="true"></span>
                                </span>
                                <span>Remember me</span>
                            </label>
                        </div>
                        <div class="input-container">
                            <button class="btn-style">Sign Up</button>
                        </div>
                    </div>
                    <!--FORM FIELD END-->
                    <!--OPTION START-->
                    <div class="option">
                        <h5>Or Using</h5>
                    </div>
                    <!--OPTION END-->
                    <!--OPTION START-->
                    <div class="social-login">
                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
                    </div>
                    <!--OPTION END-->
                </div>
                <!--SIGNIN AS USER END-->
                <div class="user-box-footer">
                    Already have an account? <a href="#">Sign In</a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- register Modal end-->

    <!-- SIGNIN MODEL START -->
    <div class="modal fade" id="signin-box" tabindex="-1" role="dialog">
        <div class="modal-dialog">
        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-content">
                <div class="user-box">
                    <h2>Sign In</h2>
                    <!--FORM FIELD START-->
                    <div class="form">
                        <div class="input-container">
                            <input type="text" placeholder="E-mail">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="input-container">
                            <input type="password" placeholder="Password">
                            <i class="fa fa-unlock"></i>
                        </div>
                        <div class="input-container">
                            <label>
                                <span class="radio">
                                    <input type="checkbox" name="foo" value="1" checked>
                                    <span class="radio-value" aria-hidden="true"></span>
                                </span>
                                <span>Remember me</span>
                            </label>
                        </div>
                        <div class="input-container">
                            <button class="btn-style">Sign In</button>
                        </div>
                    </div>
                    <!--FORM FIELD END-->
                    <!--OPTION START-->
                    <div class="option">
                        <h5>Or Using</h5>
                    </div>
                    <!--OPTION END-->
                    <!--OPTION START-->
                    <div class="social-login">
                        <a href="#" class="google"><i class="fa fa-google-plus"></i>Google Account</a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i>Facebook Account</a>
                    </div>
                    <!--OPTION END-->

                </div>
                <div class="user-box-footer">
                    <p>Don't have an account?<br><a href="#">Sign up as a User</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- SIGNIN MODEL END -->

	

    	<!--HEADER START-->
    	<header id="header_2">
    		<!--kode top bar start-->
    		<div class="top_bar_2">
	    		<div class="container">
	    			<div class="row">
	    				<div class="col-md-5">
	    					<div class="pull-left">
	    						
	    					</div>
	    				</div>
	    				<div class="col-md-7">
                                              
    						<!-- <div class="lng_wrap">
	    						<div class="dropdown">
									<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									<i class="fa fa-globe"></i>Language
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										<li><a href="#"><i><img src="images/english.jpg" alt=""></i>English</a></li>
										<li><a href="#"><i><img src="images/german.jpg" alt=""></i>German</a></li>
									</ul>
								</div>
	    					</div> -->
    						<!-- <ul class="login_wrap">
    							<li><a href="#" data-toggle="modal" data-target="#reg-box"><i class="fa fa-user"></i>Register</a></li>
    							<li><a href="#" data-toggle="modal" data-target="#signin-box"><i class="fa fa-sign-in"></i>Sign In</a></li>
    						</ul>	 -->
	    					<!-- <ul class="top_nav">
	    						<li><a href="blog-detail.html">News</a></li>
	    						<li><a href="event-detail.html">Event</a></li>
	    						<li><a href="our-courses.html">Giving</a></li>
	    						<li><a href="contactus.">contact us</a></li>
	    					</ul> -->
                                          <div class="lng_wrap"> 
                                            <ul class="top_nav" ><em class="contct_2"><i class="fa fa-phone"></i> Call Us  on +91-20-27478666, 66351700</em></ul>
                                           </div>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
    		<!--kode top bar end-->

	    	<!--kode navigation start-->
    		<div class="kode_navigation">
    			<div id="mobile-header">
                	<a id="responsive-menu-button" href="#sidr-main"><i class="fa fa-bars"></i></a>
                </div>
    			<div class="container">
    				<div class="row">
    					<div class="col-md-2">
    						<div class="logo_wrap">
    							<a href="<?php echo get_site_url(); ?>"><img src="<?php echo bloginfo('template_url');?>/extra-images/logo_2.png" alt=""></a>
    						</div>
    					</div>
    					<div class="col-md-10">
    						<!--kode nav_2 start-->
    						<div class="nav_2" id="navigation">
    							  <ul>
                                    <li><a href="<?php echo get_site_url(); ?>">home</a></li>
                                    <li><a href="<?php echo get_site_url(); ?>/about-us/">About Us</a></li>

                                     <li><a href="#">programme</a>
                                     <ul>

                                    <li><a href="<?php echo get_site_url(); ?>/pgdm-ba"> PGDM BA </a></li>


                                    <li><a href="<?php echo get_site_url(); ?>/pgdm-analytics"> PGDM Analytics</a></li>


                                    <li><a href="<?php echo get_site_url(); ?>/mba-at-city-of-seattle">MBA At City of Seattle </a></li>
                                    <!--<li><a href="<?php echo get_site_url(); ?>/">Internship Programme</a>-->
                                     <!--</li>-->
                                    </ul>
                                    </li>
                                    <li><a href="#"> Campus </a>
                                        <ul>

                                            <li><a href="<?php echo get_site_url(); ?>/infrastructure"> Infrastructure </a></li>


                                            <li><a href="<?php echo get_site_url(); ?>/faculty"> Faculty</a></li>


                                            <li><a href="<?php echo get_site_url(); ?>/life-at-asm">Life At ASM </a></li>
                                            <!--<li><a href="<?php echo get_site_url(); ?>/">Internship Programme</a>-->
                                            <!--</li>-->
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo get_site_url(); ?>/">News & Events</a>
                                           <ul>

                                            <li><a href="<?php echo get_site_url(); ?>/events-at-asm">Events At ASM</a></li>


                                            <li><a href="<?php echo get_site_url(); ?>/news-from-campus">News From Campus</a></li>


                                           
                                            <!--<li><a href="<?php echo get_site_url(); ?>/">Internship Programme</a>-->
                                            <!--</li>-->
                                        </ul>
                                    </li>
   <li><a href="<?php echo get_site_url(); ?>/placements">Placements</a></li>

                                    <li><a href="<?php echo get_site_url(); ?>/life-at-asm">Gallery</a>
                                        <!-- <ul>

                                            <li><a href="<?php echo get_site_url(); ?>/">Life At ASM</a></li>


                                            <li><a href="<?php echo get_site_url(); ?>/">Global Exposure </a></li>


                                        </ul>
 -->
                                    </li>

                                    <li><a href="<?php echo get_site_url(); ?>/contact-us">Contact US</a>

                                    </li>
                         <!-- <li><a id="simple-menu" href="#sidr"><i class="fa fa-bars"></i></a></li> -->
                                     </ul>
    						</div>
    						<!--kode nav_2 end-->
    					</div>
    				</div>
    			</div>
    		</div>
    		<!--kode navigation end-->
		</header>
		<!--HEADER END-->