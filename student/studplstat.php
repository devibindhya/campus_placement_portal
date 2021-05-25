<?php
session_start();
?><!DOCTYPE html>
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
	     <?php	
			$name=$_SESSION['user'];
			$id=$_SESSION['id'];
			?>
	
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

	<header id="header">
		<div class="container">
			<a href="studhome.php" id="logo" title="LBSITW">LBSITW</a>
			<div class="menu-trigger"></div>
			<nav id="menu">
			<ul>
					<li><a href="studhome.php">Home</a></li>
					<li><a href="#events.html">About us</a></li>
					<li><a href="studplportal.php">Placement portal</a></li>
 				</ul>
				<ul>
					<li><a href="studrecrt.php">Recruiters</a></li>
				    <li><a href="#fancy" class="get-contact">Contact</a></li>	
					<li><a href="#">Hi <?php echo $name; ?> </a></li>
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
			<h1 class="heading">Placement details</h1>
          <div align="center" style="color:dodgerblue;font-size:20px;">
	
	</div>
	
	<table align="center">
		<tr>
		<th>Company name</th>
		<th>Placed Students</th>
		</tr>
		   
				<?php
				require_once("dbconnect.php");
				
				$stat=1;
				$qry=$dbh->prepare("SELECT company_name, COUNT( studidno ) AS count FROM callletter WHERE STATUS =? GROUP BY comid ");
			    $val=array($stat);
				$exe=$qry->execute($val);
				
                $qry->setFetchMode(PDO::FETCH_ASSOC);
               	while($res=$qry->fetch())
				{
				
				?>
			     <tr>
				   <td><?php echo $res['company_name']; ?>  </td>
				   <td><?php echo $res['count']; ?>  </td>
				   </tr>
	       <?php }   ?>	   
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
			<p class="copy">Copyright 2017 Demn University. Designed by <a href=""> </a>. All rights reserved.</p>
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
