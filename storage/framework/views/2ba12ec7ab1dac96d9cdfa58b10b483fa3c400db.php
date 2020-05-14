<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $__env->yieldContent('description'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('keywords'); ?>">
	<!--title-->
<title><?php echo $__env->yieldContent('title',"Move Klang"); ?></title>
	
	<!--CSS-->
    <link href="<?php echo e(asset('public/assets/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('public/assets/css/font-awesome.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('public/assets/css/magnific-popup.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('public/assets/css/owl.carousel.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('public/assets/css/subscribe-better.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('public/assets/css/main.css')); ?>" rel="stylesheet">
	<link id="preset" rel="stylesheet" type="text/css" href="<?php echo e(asset('public/assets/css/presets/preset2.css')); ?>">
	<link href="<?php echo e(asset('public/assets/css/responsive.css')); ?>" rel="stylesheet">		
	
	<!--Google Fonts-->
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>
	
    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
</head><!--/head-->
<body>
	<div id="main-wrapper" class="homepage-two fixed-nav">
		<div class="topbar">
			<div class="container">
				<div id="date-time"></div>
				<div id="topbar-right">
					<div class="dropdown language-dropdown">						
						<a data-toggle="dropdown" href="#"><span class="change-text">En</span> <i class="fa fa-angle-down"></i></a>
						<ul class="dropdown-menu language-change">
							<li><a href="#">EN</a></li>
							<li><a href="#">FR</a></li>
							<li><a href="#">GR</a></li>
							<li><a href="#">ES</a></li>
						</ul>								
					</div>				
					<div id="weather"></div>
					<div class="searchNlogin">
						<ul>
							<li class="search-icon"><i class="fa fa-search"></i></li>
							<li class="dropdown user-panel"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
								<div class="dropdown-menu top-user-section">
									<div class="top-user-form">
										<form id="top-login" role="form">
											<div class="input-group" id="top-login-username">
												<span class="input-group-addon"><img src="<?php echo e(asset('public/assets/images/others/user-icon.png')); ?>" alt="" /></span>
												<input type="text" class="form-control" placeholder="Username" required="">
											</div>
											<div class="input-group" id="top-login-password">
												<span class="input-group-addon"><img src="<?php echo e(asset('public/assets/images/others/password-icon.png')); ?>" alt="" /></span>
												<input type="password" class="form-control" placeholder="Password" required="">
											</div>
											<div>
												<p class="reset-user">Forgot <a href="#">Password/Username?</a></p>
												<button class="btn btn-danger" type="submit">Login</button>
											</div>
										</form>
									</div>
									<div class="create-account">
										<a href="#">Create a New Account</a>
									</div>
								</div>
							</li>
						</ul>
						<div class="search">
							<form role="form">
								<input type="text" class="search-form" autocomplete="off" placeholder="Type service, location, category etc">
							</form>
						</div> <!--/.search--> 
					</div><!-- searchNlogin -->
				</div>
			</div>
		</div>
		<div id="navigation">
			<div class="navbar" role="banner">
				<div class="container">
					<div class="top-add">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
							<a class="navbar-brand" href="index.html">
								<img class="main-logo img-responsive" src="<?php echo e(asset('public/assets/images/presets/preset1/logo.png')); ?>" alt="logo">
							</a>
						</div> 
						<div class="navbar-right">
                            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 hidden-xs">
                                 <a href="#" style="float: left"><img class="img-responsive" src="<?php echo e(asset('public/assets/images/others/ads.jpg')); ?>" alt="" /></a>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 hidden-xs">							
                                <a href="#"><img class="img-responsive" src="<?php echo e(asset('public/assets/images/others/joinus.png')); ?>" alt="" /></a>
                            </div>
                        </div>
                        
					</div>
				</div> 
				<div id="menubar" class="container">
					<div class="container">
						<nav id="mainmenu" class="navbar-left collapse navbar-collapse"> 
							<ul class="nav navbar-nav">                       
							<li><a href="javascript:void(0);">Home</a></li>
							<li><a href="javascript:void(0);" >Companies</a></li>
							<li><a href="javascript:void(0);" >Location</a></li>
                            <li><a href="javascript:void(0);">New Promotions</a></li>
                            <li><a href="javascript:void(0);">Exhibition</a></li>
                            <li><a href="javascript:void(0);">Voucher</a></li>
                            <li><a href="javascript:void(0);">Chat Room</a></li>
							
						</ul> 									
						</nav>					
					</div>
				</div><!--/#navigation--> 
			</div><!--/#navigation--> 
		</div><!--/#navigation--> 

	
		<div class="container">
			<div class="row">
			<?php echo $__env->yieldContent('content'); ?>
			</div>
		</div><!--/.container-->
		
		<div id="twitter-feed">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="twitter-feeds">
							<div class="twitter-feed">
								<img class="img-responsive" src="images/others/twitter.png" alt="" />
								<h2>#Newspress</h2>
								<p>Confusing <a href="#">#design</a> terms: what's the difference between quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">#UX, #UI and #IA? http://buff.ly/1KdjpEi  </a> </p>
							</div>
							<div class="twitter-feed">
								<img class="img-responsive" src="images/others/twitter.png" alt="" />
								<h2>#ThemeRegion</h2>
								<p>Confusing <a href="#">#design</a> terms: what's the difference between quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">#UX, #UI and #IA? http://buff.ly/1KdjpEi  </a> </p>
							</div>
							<div class="twitter-feed">
								<img class="img-responsive" src="images/others/twitter.png" alt="" />
								<h2>#Doors</h2>
								<p>Confusing <a href="#">#design</a> terms: what's the difference between quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#">#UX, #UI and #IA? http://buff.ly/1KdjpEi  </a> </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/#twitter-feed-->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="widget">
							<h1 class="section-title title">About Us</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							<address>
								<p>Address : 123 Gegrit, London, England</p>
								<p>Call : +1234-222-3333</p>
								<p>Email: <a href="#">info@newspress.com</a></p>
							</address>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget">
							<h1 class="section-title title">Flickr Gallery</h1>
							<ul>
								<li><a href="images/post/flicker/1.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/1.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/2.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/2.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/3.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/3.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/4.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/4.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/5.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/5.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/6.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/6.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/7.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/7.jpg" alt="" /></a></li>
								<li><a href="images/post/flicker/8.jpg" class="image-link"><img class="img-responsive" src="images/post/flicker/8.jpg" alt="" /></a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget news-letter">
							<h1 class="section-title title">Weekly NewsLetter</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
							
							<form action="#" method="post" id="subscribe-form" name="subscribe-form">
								<input type="text" placeholder="Your E-mail" name="email">
								<button type="submit" name="subscribe" id="subscribe" >Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.footer-widget-->
	
		<footer id="footer">
			<div class="footer-top">
				<div class="container text-center">
					<div class="logo-icon"><img class="img-responsive" src="images/presets/preset1/logo-icon.png" alt="" /></div>
				</div>
			</div>
			<div class="footer-menu">
				<div class="container">
					<ul class="nav navbar-nav">                       
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Products</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Advertisement</a></li>
						<li><a href="#">Team</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul> 
				</div>
			</div>
			<div class="bottom-widgets">
				<div class="container">
					<div class="col-sm-4">
						<div class="widget">
							<h2>Category</h2> 
							<ul>
								<li><a href="#">Business</a></li>
								<li><a href="#">Politics</a></li>
								<li><a href="#">Sports</a></li>
								<li><a href="#">World</a></li>
								<li><a href="#">Technology</a></li>
							</ul>
							<ul>
								<li><a href="#">Environment</a></li>
								<li><a href="#">Health</a></li>
								<li><a href="#">Entertainment</a></li>
								<li><a href="#">Lifestyle</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="widget">
							<h2>Editions</h2> 
							<ul>
								<li><a href="#">United States</a></li>
								<li><a href="#">China</a></li>
								<li><a href="#">India</a></li>
								<li><a href="#">Maxico</a></li>
								<li><a href="#">Middle East</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="widget">
							<h2>Tag</h2> 
							<ul>
								<li><a href="#">Gallery</a></li>
								<li><a href="#">Sports</a></li>
								<li><a href="#">Featured</a></li>
								<li><a href="#">World</a></li>
								<li><a href="#">Fashion</a></li>
							</ul>
							<ul>
								<li><a href="#">Environment</a></li>
								<li><a href="#">Health</a></li>
								<li><a href="#">Entertainment</a></li>
								<li><a href="#">Lifestyle</a></li>
								<li><a href="#">Business</a></li>
							</ul>
							<ul>
								<li><a href="#">Tech</a></li>
								<li><a href="#">Movie</a></li>
								<li><a href="#">Music</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="widget">
							<h2>Products</h2> 
							<ul>
								<li><a href="#">Ebook</a></li>
								<li><a href="#">Baby Product</a></li>
								<li><a href="#">Magazine</a></li>
								<li><a href="#">Sports Elements</a></li>							
								<li><a href="#">Technology</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container text-center">
					<p><a href="#">Move Klang </a>&copy; 2020 </p>
				</div>
			</div>		
		</footer>	
	</div><!--/#main-wrapper--> 
	
	
	<!--<div class="subscribe-me text-center">
		<h1>Don’t Miss The Hottest News</h1>
		<h2>Subscribe our Newsletter</h2>
		<a href="#close" class="sb-close-btn"><img class="<img-responsive></img-responsive>" src="images/others/close-button.png" alt="" /></a>
		<form action="#" method="post" id="popup-subscribe-form" name="subscribe-form">			
			<div class="input-group">
				<span class="input-group-addon"><img src="images/others/icon-message.png" alt="" /></span>
				<input type="text" placeholder="Enter your email" name="email">
				<button type="submit" name="subscribe">Go</button>
			</div>
		</form>
	</div>/.subscribe-me--> 
	
		
	
	<!--/Preset Style Chooser--> 
	
	<!--/End:Preset Style Chooser-->
		
	<!--/#scripts--> 
    <script type="text/javascript" src="<?php echo e(asset('public/assets/js/jquery.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/assets/js/bootstrap.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('public/assets/js/jquery.magnific-popup.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('public/assets/js/owl.carousel.min.js')); ?>"></script> 
	<script type="text/javascript" src="<?php echo e(asset('public/assets/js/moment.min.js')); ?>"></script> 
	<script type="text/javascript" src="<?php echo e(asset('public/assets/js/jquery.simpleWeather.min.js')); ?>"></script> 
	<script type="text/javascript" src="<?php echo e(asset('public/assets/js/jquery.sticky-kit.min.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(asset('public/assets/js/jquery.easy-ticker.min.js')); ?>"></script> 
	<script type="text/javascript" src="<?php echo e(asset('public/assets/js/jquery.subscribe-better.min.js')); ?>"></script> 
    <script type="text/javascript" src="<?php echo e(asset('public/assets/js/main.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(asset('public/assets/js/switcher.js')); ?>"></script>
<script>
    var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > 120){
       $(".navbar-brand").addClass('small-logo');
   } else if(st < 120){
    $(".navbar-brand").removeClass('small-logo');
   }
});
</script>
</body>
</html><?php /**PATH C:\xampp\htdocs\moveklang\resources\views/layouts/master.blade.php ENDPATH**/ ?>