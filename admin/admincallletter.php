<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Campus Recruitment System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<script src="jquery-3.2.1.min.js"></script>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
		<style>
		
		table
		{
			border-collapse:collapse;
			width:50%;
			height:200px;
			margin:0;
			overflow-x: scroll;
			
			
		}
        th
		{
           background-color:dodgerblue;
           color:floralwhite;
		   text-align:center;
		   padding:8px;
		   
		   font-size:18px;
		  
		} 
		th:hover
		{
		   background-color:lightgray;
           color:indigo;
		}
		  
		 
		tr
		{
        font-size:20px;
		background-color:#EBF5FB;
		color:#85929E;
		padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
		}
		tr:nth-child(even)
		{
           background-color:#D6EAF8  ;
           color:black;
		   font-size:18px;
		   
		 
		} 
		tr:hover
		{
           background-color:#D4E6F1;
           color:#1A5276;
		} 
		.link
		{
			text-decoration:none;
			color:red;
			font-size:20px;
			background-color:black;
		}
		.link:hover
		{
				background-color:yellow;
		}
		
		</style>
</head>
<body>
      <?php
			/* session_start();
			$name=$_SESSION['user']; */
			
		?>

	<header id="header">
		<div class="container">
			<a href="adminhome.php" id="logo" title="Welcome">Admin</a>
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
					<li><a href="#">Hi <<!--?php echo $cname; ?-->> </a></li>
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
			<h1 class="heading">Placed Student Details</h1>
          <div align="center" style="color:dodgerblue;font-size:20px;">
	
	</div>
	
	<table align="center">
		<tr>
		<th>Student name</th>
		<th>Student ID</th>
		<th>Company Name</th>
		<th>Post</th>
		<!--<th>Gender</th>
		<th>Email</th>
		<th>Phone No:</th>
		<th>Dept</th>
		<th>Semester</th>
		<th>Mark</th>
		<th>Resume</th> 
		<th colspan='3'>Operations</th>-->
		</tr>
		   
				<?php
				require_once("dbconnect.php");
				
				$stat=1;
				$qry=$dbh->prepare("SELECT name,studidno,company_name,post FROM callletter WHERE STATUS =?");
			    $val=array($stat);
				$exe=$qry->execute($val);
				
                $qry->setFetchMode(PDO::FETCH_ASSOC);
               	while($res=$qry->fetch())
				{
				
				?>
			     <tr>
				   <td><?php echo $res['name']; ?>  </td>
				   <td><?php echo $res['studidno']; ?>  </td>
				   <td><?php echo $res['company_name']; ?>  </td>
				   <td><?php echo $res['post']; ?>  </td>
				   
				   <!--<td><a class="link" href="#addstud.php?idno=<<!--?php echo $res['idno']?>?eventid=<<!--?php echo $eventid?-->
				   <!--<td><a class="link" href="#rejectstud.php?idno=">Reject </a></td>-->
				   </tr>
	            <?php 
                 				
				   }   
				   ?>
	</table>

			<div class="main-content">
				<div align="center" style="color:hotpink;font-size:20px;">
	<h3><u></u></h3>
	</div>
	
	
	
				
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
					
				</article>
			</section>
			<p class="copy">Copyright 2017 Demn University. Designed by <a href="http://www.vandelaydesign.com/" title="Designed by Vandelay Design" target="_blank">Vandelay Design</a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
