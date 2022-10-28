<?php	
	session_start();
	include('connect/db.php');
	unset($_SESSION['SESS_ADMIN_ID']);
	unset($_SESSION['SESS_USER_ID']);
	unset($_SESSION['SESS_WORKSHOP_ID']);
	unset($_SESSION['SESS_FUEL_ID']);	
	unset($_SESSION['SESS_FOOD_ID']);	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>We To Go</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="V Track" />
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link href="css/font-awesome.css" rel="stylesheet">	<!-- font-awesome icons -->     
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />  <!-- flexslider-CSS -->  
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen"> 
<link rel="stylesheet" href="assests/css/font-awesome.min.css">
<!-- //Custom Theme files --> 
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>  
<!-- //js -->
<!-- web-fonts -->    
<!-- //web-fonts -->
</head>
<body>

	<!-- banner -->
	<div id="home" class="w3ls-banner "> 
		<!-- header -->
		<div class="header-w3layouts"> 
			<!-- Navigation -->
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">We To Go</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1 class="w3lslogo"><a href="index.php">W <span> To Go</span></a></h1>
					</div> 
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav navbar-right cl-effect-15">
							<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
							<li><a class="page-scroll" href="#home" data-hover="Home">Home</a></li> 											
							<li><a class="page-scroll" href="#login" data-hover="Login">Login</a></li>
                            <li><a class="page-scroll" href="#register" data-hover="Register">Register</a></li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</div>
				<!-- /.container -->
			</nav>  
		</div>	
		<!-- //header -->
		<!-- banner-text -->
		<div class="banner-text">  
			<div class="container">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="banner-w3lstext">  
								<h2>Travel To Go</h2>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">  
								<h3>Easy Handle </h3>
							</div>
						</li>
						<li>
							<div class="banner-w3lstext">  
								<h3>Sapien Delects</h3>
							</div>
						</li>
					</ul> 
				</div> 	  
				<a href="#register" class="wthree-btn btn-6 scroll">Register Now <span></span></a>   
			</div> 
		</div> 
		<!-- //banner-text -->   
	</div>	
	<!-- //banner --> 
	
	</div>
	<!---728x90--->

	<!-- about -->
	
	<!---728x90--->
	<!-- features -->
	<div id="register" class="features">
		<div class="container"> 
			<div class="w3layouts_skills_grids w3layouts-features-agileinfo">
				<div class="col-md-6 col-sm-9 w3features-right">
					<div id="register" class="login-form agileits-right"> 
						<div class="agile-row">
							<h5>Register Form</h5> 
							<div class="login-agileits-top"> 	
                            <form action="signup_save.php" method="post" autocomplete="off">
                    			<p>Name</p>
                        		<input type="text" class="name" name="name" required pattern="[a-zA-Z1 _]{3,50}">
                            	<p>Contact No</p>
                            	<input type="text" class="name" name="contact_no" required pattern="[0-9]{10,10}" maxlength="10" minlength="10">
                            	<p>Email</p>
                                <input type="email" class="email" name="email" required>
                            	<p>Location</p>
                          		<input type="text" class="name" name="location" required pattern="[a-zA-Z1 _]{3,50}">
                            	<p>Password</p>
                                <input type="password" class="password" name="password" required  maxlength="15" minlength="5">
                            	<p>Sign Up</p>
                                <select name="utype" class="form-control">	
                                    <option value="">Select</option>
                                    <option>Workshop</option>
                                    <option>Fuel</option>
                                    <option>Restaurant</option>
                                    <option>User</option>    
                                </select>
								<input type="submit" value="Register">
								</form> 	
							</div>  
						</div>  
					</div>  
				</div>
				<div class="col-md-6 w3features-left">
					
					
					<div class="w3features-grids">
						<div class="w3features-left-gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-hotel"> </i>
							</div>
						</div>
						<div class="w3features-left-gridr">
							<h4>Register Here</h4>
							<p>Hurry Up Find Way.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div> 
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //features -->
	<!---728x90--->
	
	<div id="login" class="contact">
		<div class="w3_agileits_contact_grids">
			<div class="col-md-6 col-xs-8 w3_agileits_contact_grid_left">
				<div class="agile_map">
					<iframe src="https://www.google.com/maps/embed" style="border:0"></iframe>
				</div>
				<div class="agileits_w3layouts_map_pos">
					<div class="agileits_w3layouts_map_pos1">
						<h3>Contact Info</h3>
						<p>348 Melrose Place, 4538 victoria, 4th block avenue, Palakkad.</p>
						<ul class="wthree_contact_info_address">
							<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
							<li><i class="fa fa-phone" aria-hidden="true"></i>+(0123) 232 232</li>
						</ul>
						<div class="w3_agile_social_icons w3_agile_social_icons_contact">
							<ul>
								<li><a href="#" class="icon icon-cube agile_facebook"></a></li>
								<li><a href="#" class="icon icon-cube agile_rss"></a></li>
								<li><a href="#" class="icon icon-cube agile_t"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 w3_agileits_contact_grid_right">
				<h3 class="agileits-title">Login<span class="w3lshr-line"> </span></h3>  
				<form action="login_login.php" method="post" autocomplete="off">
					<span class="input input--ichiro">
						<input class="input__field input__field--ichiro" type="email" id="input-25" name="email" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-25">
							<span class="input__label-content input__label-content--ichiro">Email</span>
						</label>
					</span>
					<span class="input input--ichiro">
					<input class="input__field input__field--ichiro" type="password" id="input-26" name="password" placeholder=" " required="" />
						<label class="input__label input__label--ichiro" for="input-26">
							<span class="input__label-content input__label-content--ichiro">Password</span>
						</label>
					</span>
					<input type="submit" value="Submit">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- contact -->
	<!-- subscribe -->
	<div class="subscribe-agileinfo services jarallax">     
		<div class="container"> 
			<h4>Subscribe Our Newsletter</h4>  
			<form action="#" method="post"> 
				<input type="email" name="email" placeholder="Enter your Email..." required="">
				<input type="submit" value="Submit">
				<div class="clearfix"> </div>
			</form> 
		</div>  
	</div>
	<!-- //subscribe --> 
	<!-- copy rights start here -->
	<div class="copyw3-agile">
		<div class="container">  
			<div class="w3_agile_social_icons footer-w3icons">
				<ul>
					<li><a href="#" class="icon icon-cube agile_facebook"></a></li>
					<li><a href="#" class="icon icon-cube agile_rss"></a></li>
					<li><a href="#" class="icon icon-cube agile_instagram"></a></li>
					<li><a href="#" class="icon icon-cube agile_t"></a></li>
				</ul>
			</div> 
			<p>© 2022 We To Go. All Rights Reserved |  </p>
		</div>
	</div>
	<!-- //copy right end here --> 
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body">
					<img src="images/g5.jpg" alt=""> 
					<h5>Cras rutrum iaculis enim</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras rutrum iaculis enim, non convallis felis mattis at. Donec fringilla lacus eu pretium rutrum. Cras aliquet congue ullamcorper. Etiam mattis eros eu ullamcorper volutpat. Proin ut dui a urna efficitur varius. uisque molestie cursus mi et congue consectetur adipiscing elit cras rutrum iaculis enim, Lorem ipsum dolor sit amet, non convallis felis mattis at. Maecenas sodales tortor ac ligula ultrices dictum et quis urna. Etiam pulvinar metus neque, eget porttitor massa vulputate. </p>
				</div> 
			</div>
		</div>
	</div>
	<!-- //modal --> 
	<!-- timer scripts --> 
	<script type="text/javascript" src=" js/moment.js"></script>
	<script type="text/javascript" src=" js/moment-timezone-with-data.js"></script>
	<script type="text/javascript" src="js/timer.js"></script>
	<!-- //timer scripts -->
	<!-- start-smooth-scrolling --> 
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>	
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
			
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	<!-- //end-smooth-scrolling -->	 
	<!-- smooth-scrolling-of-move-up -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->   
	<!-- Scrolling Nav JavaScript --> 
    <script src="js/scrolling-nav.js"></script>  
	<!-- //fixed-scroll-nav-js -->  
	<!-- bth hover effect --> 
	<script>
	$(function() {
		$('.btn-6')
		.on('mouseenter', function(e) {
			var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
		  $(this).find('span').css({
			top: relY,
			left: relX
		  })
		})
		.on('mouseout', function(e) {
		  var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
		  $(this).find('.btn-6 span').css({
			top: relY,
			left: relX
		  })
		}); 
	});
	</script>	
	<!-- //bth hover effect --> 
	<!-- jarallax -->
	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<!-- //jarallax -->   
	<!-- FlexSlider --> 
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //End-FlexSlider -->  
	<!-- pop-up-script -->
	<script src="js/jquery.chocolat.js"></script>
	<script type="text/javascript">
	$(function() {
		$('.view-seventh a').Chocolat();
	});
	</script>
	<!-- //pop-up-script -->  
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>


	</body>
</html>