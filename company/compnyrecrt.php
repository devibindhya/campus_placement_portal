<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Campus Recruitment System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="index.html" id="logo" title="LBSITW">LBSITW</a>
			<div class="menu-trigger"></div>
			<?php
			session_start();
			$cname=$_SESSION['compname'];
			$cid=$_SESSION['comid'];
			$addr=$_SESSION['compaddr'];
			$phon=$_SESSION['compphon'];
			$email=$_SESSION['compemail'];
			
			?>
			<nav id="menu">
			
				<ul>
					<li><a href="compnyhome.php">Home</a></li>
					<li><a href="#events.php">About us</a></li>
					<li><a href="compnyplportal.php">Placement portal</a></li>
 				</ul>
				<ul>
					<li><a href="compnyrecrt.php">Recruiters</a></li>
					<li><a href="#fancy" class="get-contact">Contact</a></li>
					<li><a href="#">Hi <?php echo $cname; ?> </a></li>
					<li><a href="studlogout.php">Logout</a></li>
   				</ul>
				
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
	
	<div class="divider"></div>
	
	<div class="content">
		<div class="container">
			<h1 class="single">Our students are placed with</h1>

			<div class="main-content">
				<div class="slider-con">
					<ul class="bxslider">
						<li>
							<div class="slide">
								<ul>
									<li><a href="#"><img src="images/recruit.jpg" alt=""></a></li>
									
								</ul>
							</div>
						</li>
						<li>
							<div class="slide">
								<ul>
									<li><a href="#"><img src="images/recruit2.jpg" alt=""></a></li>
									
								</ul>
							</div>
						</li>
						<li>
							<div class="slide">
								<ul>
									<li><a href="#"><img src="images/recruit3.png" alt=""></a></li>
									
								</ul>
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<aside id="sidebar">
				<div class="widget sidemenu">
					
				</div>
			</aside>
			<!-- / sidebar -->
	
		</div>
		<!-- / container -->
	</div>
	
	<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">151 W Adams St<br>Detroit, MI 48226</a></li>
						<li class="mail"><a href="#">plmntofficer@demnuniversity.com</a></li>
						<li class="phone last"><a href="#">(971) 536 845 924</a></li>
					</ul>
				</article>
				
				<article class="col-3">
					<h3>Social media</h3>
					<p>Visit our pages in social medias by clicking the link</p>
					<ul>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="google-plus"><a href="#">Google+</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
					</ul>
				</article>
				<article class="col-4">
					<h3>Newsletter</h3>
					<p>Reach us through email..</p>
					<form action="#">
						<input placeholder="Email address..." type="text">
						<button type="submit">Subscribe</button>
					</form>
					<ul>
						<li><a href="#"></a></li>
					</ul>
				</article>
			</section>
			<p class="copy">Copyright 2017 Demn University. Designed by <a href="http://.com/" title="" target="_blank"></a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<h2>Request information</h2>
		<form action="#">
			<div class="left">
				<fieldset class="mail"><input placeholder="Email address..." type="text"></fieldset>
				<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>
				<fieldset class="subject"><select><option>Choose subject...</option><option>Choose subject...</option><option>Choose subject...</option></select></fieldset>
			</div>
			<div class="right">
				<fieldset class="question"><textarea placeholder="Question..."></textarea></fieldset>
			</div>
			<div class="btn-holder">
				<button class="btn blue" type="submit">Send request</button>
			</div>
		</form>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
