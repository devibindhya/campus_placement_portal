<?php
session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Upcoming Events</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<!--Company:- view notifications  -->
<?php
			$cname=$_SESSION['compname'];
			$cid=$_SESSION['comid'];
			$addr=$_SESSION['compaddr'];
			$phon=$_SESSION['compphon'];
			$email=$_SESSION['compemail'];
			
			?>
	<header id="header">
		<div class="container">
			<a href="home.html" id="logo" title=""></a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="compnyhome.php">Home</a></li>
					<li><a href="events.php">About us</a></li>
					<li><a href="compnyplportal.php">Placement portal</a></li>
 				</ul>
				<ul>
					<li><a href="compnyrecrt.php">Recruiters</a></li>
					<!-- <li><a href="campuslogin.html">Login</a></li>-->
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

			<div class="main-content">
				<h1>Upcoming events</h1>
				<section class="posts-con">
			<?php	
				require_once("dbconnect.php");
				$status=0;
				$qry1=$dbh->prepare("select * from notify where comid=?");
				$val=array($cid);
				$exe1=$qry1->execute($val);
                $qry1->setFetchMode(PDO::FETCH_ASSOC);

				while($res=$qry1->fetch())
				{
				
				
					?>
					<article>
						 
						<div class="info">
							<h3><?php echo $res['title'];?></h3>
							<p class="info-line"><span class="time">12:30 PM</span><span class="place"><?php echo $res['venue'];?></span></p>
							<p><?php echo $res['description'];?></p>
							<a href="compdeletenoti.php?id=<?php echo $res['id'];?>" >Delete </a>
						</div>
					</article>
				<?php } ?>
				</section>
			</div>
			
			<aside id="sidebar">
				<div class="widget sidemenu">
					<ul>
						<li><a href="compfacility.php">Facilities<span class="nr">142</span></a></li>
						<li><a href="compnyplstat.php">Placement Statistics<span class="nr">98</span></a></li>
						<li class="current"><a href="comprecpro.php">Recruitment Process<span class="nr">16</span></a></li>
						<li><a href="comppostvacc.php">Add Notification<span class="nr">87</span></a></li>
						<li><a href="compviewnoti.php">View Notification<span class="nr">87</span></a></li>
						<li><a href="comstuddetail.php">Generate Call Letter<span class="nr">87</span></a></li>
						
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
						<li class="mail"><a href="#">contact@harrisonuniversity.com</a></li>
						<li class="phone last"><a href="#">(971) 536 845 924</a></li>
					</ul>
				</article>
				
				<article class="col-3">
					<h3>Social media</h3>
					<p>Visit our pages ..</p>
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
			<p class="copy">Copyright 2017 Demn University. Designed by <a href="" title="" target="_blank"></a>. All rights reserved.</p>
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
