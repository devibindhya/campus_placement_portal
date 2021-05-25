<?php
session_start();
?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Student Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	 <link rel="stylesheet" media="all" href="css/style.css"> 
	 <style>
	 .login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
   
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

.form input ,.typeselct{
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background:#0080ff;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #3399ff ;
  color:white;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: blue;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container1 {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container1:before, .container1:after,option {
  content: "";
  display: block;
  clear: both;
}
.container1 .info {
  margin: 50px auto;
  text-align: center;
}
.container1 .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container1 .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container1 .info span a {
  color: #000000;
  text-decoration: none;
}
.container1 .info span .fa {
  color: #EF3B3A;
}
	 </style>
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
<!--  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script  src="js/index.js"></script> -->

	<header id="header">
		<div class="container">
			<a href="home.php" id="logo" title=""></a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="events.php">About us</a></li>
					<li><a href="plportal.php">Placement portal</a></li>
 				</ul>
				<ul>
					<li><a href="recrt.php">Recruiters</a></li>
					<li class="dropdown"><a href="campuslogin.php"class="dropbtn">Login</a></li>
				    <li><a href="#fancy" class="get-contact">Contact</a></li>
   				</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
	
	<div class="slider">
		<ul class="bxslider">
			<li>
				<div class="container">
					<div class="info">
						<h2>It’s Time to <br><span>start the career</span></h2>
						
					</div>
				</div>
				<!-- / content -->
			</li>
			<li>
				<div class="container">
					<div class="info">
						<h2>Success doesn't come to you <br><span>you go to get it.</span></h2>
						
					</div>
				</div>
				<!-- / content -->
			</li>
			<li>
				<div class="container">
					<div class="info">
						<h2>The harder you work,<br><span>the luckier you get.</span></h2>
						
					</div>
				</div>
				<!-- / content -->
			</li>
		</ul>
		<div class="bg-bottom"></div>
	</div>
	
	 <section class="posts">
		<div class="container1">
			<article>
			 <div class="login-page">
  <div class="form">
    <form class="register-form" method="post" action="">
    
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
	<h3><b><u>Login</b></u></h3>
    <form class="login-form" method="post" action="">
      <!-- <select class="typeselct">
	  <option value="oth">Select type</option>
	  <option value="stud">Student Login</option>
	  <option value="comp">Company Login</option>
	  </option> -->
	   <input type="text" name="usname" placeholder="username"/>
      <input type="password" name="passwd"placeholder="password"/>
      <button name="sub">login</button>
      <p class="message">Not registered? <a href="campusreg.php">Create an account</a></p>
    </form>
  </div>
</div>
			</article>
		</div>
		<!-- / container -->
	</section>
 
	

	<section class="events">
		<div class="container">
			<h2>Upcoming events</h2>
			<article>
				<div class="current-date">
					<p>December</p>
					<p class="date">15</p>
				</div>
				<div class="info">
					<p>MU SIGMA WALK-IN Interview  to be held on 15th December, 2017  .</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>December</p>
					<p class="date">16</p>
				</div>
				<div class="info">
					<p>UIADI is pleased to announce the next Campus Placement Programme for Newly Qualified Engineers at December 16, 2017.</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>December</p>
					<p class="date">25</p>
				</div>
				<div class="info">
					<p>BHEL India PREPLACEMENT Talk will be scheduled on December 25, 2017</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<article>
				<div class="current-date">
					<p>December</p>
					<p class="date">29</p>
				</div>
				<div class="info">
					<p>24th International Conference on Mechatronics and Machine Vision  will be held on December 29, 2017, 10am at FDM Convention Center.</p>
					<a class="more" href="#">Read more</a>
				</div>
			</article>
			<div class="btn-holder">
				<a class="btn blue" href="#">See all upcoming events</a>
			</div>
		</div>
		<!-- / container -->
	</section>
	<div class="container">
		<a href="#fancy" class="info-request">
			<span class="holder">
				<span class="title">Request information</span>
				<span class="text">Do you have some questions? Fill the form and get an answer!</span>
			</span>
			<span class="arrow"></span>
		</a>
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
					<p>Reach us through email...</p>
					<form action="#">
						<input placeholder="Email address..." type="text">
						<button type="submit">Subscribe</button>
					</form>
					<ul>
						<li><a href="#"></a></li>
					</ul>
				</article>
			</section>
			<p class="copy">Copyright 2017 Demn University. Designed by <a href="" target="_blank"></a>. All rights reserved.</p>
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
	
	<?php
	//session_start();

				if(isset($_POST['sub']))
				{
				 require_once("dbconnect.php");
				 $usname=$_POST['usname'];
				 $passwd=$_POST['passwd'];
				 $qry=$dbh->prepare("select * from studreg where username='$usname'");
				 $ex=$qry->execute();
				 $qry->setFetchMode(PDO::FETCH_ASSOC);
				 $res=$qry->fetch();
				 $stat=$res['status'];
				
				 if($stat==1)
			{
				if($res['password']==$passwd)
				{
                     $_SESSION['user']=$res['name'];
					 $_SESSION['id']=$res['idno'];
					 echo "<script>alert('login success '); 
					         window.location='studhome.php';</script>";
					//window.location='studhome.php';
					 //header("location: studhome.php");
				}
				else
					echo "<script>alert('incorrect password');</script>";
			}
			 else if($stat==0)
				 echo "<script>alert('admin verification pending')</script>";
			    else
					
				 echo "<script>alert('login rejected')</script>";
				 					   
				}
				?>
	
	
</body>
</html>
