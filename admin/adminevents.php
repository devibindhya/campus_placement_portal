<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Upcoming Events</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	
</head>
<body>

			<!-- Navigation-->
	<header id="header">
		<div class="container">
			<a href="adminhome.php" id="logo" title=""></a>
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
					<li><a href="#">Hi Admin </a></li>
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

			<!--Fetching the upcoming events details from notify table in database  -->
				<?php	
				require_once("dbconnect.php");
				$status=0;
				$qry1=$dbh->prepare("select * from notify where status=?");
				$val=array($status);
				$exe1=$qry1->execute($val);
                $qry1->setFetchMode(PDO::FETCH_ASSOC);
             /* Upcoming oncampus placement company details and provision to allot students for the event*/
				while($res=$qry1->fetch())
				{ ?>
					<article> 
						<div class="info">
						    
							<h3><?php echo $res['title'];?></h3>
							<h3><?php echo $res['compnyname'];?></h3>
							<p class="info-line"><span class="time">12:30 PM</span><span class="place"><?php echo $res['venue'];?></span></p>
							<p><?php echo $res['description'];?></p>
							<a href="testing2.php?id=<?php echo $res['id'];?>" >Allot Students </a>&nbsp &nbsp &nbsp
							<a href="compdeletenoti.php?id=<?php echo $res['id'];?>" >Delete Notification </a>
						</div>
					</article>
				<?php } ?>
				</section>
			</div>
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
						<li class="mail"><a href="#">contact@Demnuniversity.com</a></li>
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
			<p class="copy">Copyright . Designed by <a href="#" title="Designed by" target="_blank">Design</a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	<div id="fancy">
		
	</div>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
