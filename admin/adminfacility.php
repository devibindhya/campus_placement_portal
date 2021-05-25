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
       <!--ADMIN:- COLLEGE FACILITY -->
	<header id="header">
		<div class="container">
			<a href="adminhome.php" id="logo" title="Welcome">Welcome</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
			<ul>
					<li><a href="adminhome.php">Home</a></li>
					<li><a href="adminevents.php">Events</a></li>
					<li><a href="adminplportal.php">Placement portal</a></li>
 				</ul>
				<ul>
					<li><a href="adminrecrt.php">Recruiters</a></li>
					<!-- <li><a href="campuslogin.html">Login</a></li>-->
					<li><a href="#fancy" class="get-contact">Contact</a></li>	
					<li><a href="#">Hi ADMIN </a></li>
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
			<h1 class="single">Facilities for recruiters</h1>

			<div class="main-content">
				<div class="slider-con">
					<ul class="bxslider">
						<li>
							<div class="slide">
								<ul class=lt>
								
									<li>State of the art guest house with A/C rooms</li>
									<li>Seminar Halls for pre-placement talks and seminars</li>
									<li>Fully furnished group discussion and interview rooms</li>
									<li>Fully computerized office</li>
									<li>Internet connected computer lab devoted to training and placement</li>
									<li>Student Volunteers assistance during recruitment drives</li>
									<li>Computer lab with 850 systems interconnected by LAN and high speed internet with a bandwidth of 100 Mbps has uninterrupted power supply with UPS and generator backup to conduct online tests</li>
									
								</ul>
							</div>
						</li>
						
						
					</ul>
				</div>
			</div>
			
			<aside id="sidebar">
				<div class="widget sidemenu">
					<ul>
						<li><a href="adminplstat.php">Placement Statistics<span class="nr">2</span></a></li>
						<li class="current"><a href="adminrecpro.php">Recruitment Process<span class="nr">3</span></a></li>
						<li><a href="adminfacility.php">Facilities<span class="nr">4</span></a></li>
						<li><a href="adminnewstud.php">View  New Candidate Request<span class="nr">6</span></a></li>
						<li><a href="adminallstud.php">View All Candidates<span class="nr">7</span></a></li>
						<li><a href="admincallletter.php">View Call Letters<span class="nr">8</span></a></li>
				
						<li><a href="adminviewcomp.php">Company Details<span class="nr">9</span></a></li>
						<li><a href="compdetails.php">New Company Request<span class="nr">10</span></a></li>
					</ul>
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
					<p>Reach us through mail..</p>
					<form action="#">
						<input placeholder="Email address..." type="text">
						<button type="submit">Subscribe</button>
					</form>
					<ul>
						<li><a href="#"></a></li>
					</ul>
				</article>
			</section>
			<p class="copy">Copyright 2017 Demn University. Designed by <a href="" title=" Design" target="_blank"></a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		<! <h2>Request information</h2>
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
