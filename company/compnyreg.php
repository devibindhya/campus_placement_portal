<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Company Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="srgstyle.css" media="all" />
    <link rel="stylesheet" type="text/css" href="srgdemo.css" media="all" /> 
	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	
	 <script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	 <script>
			  $(document).ready(function()
			   {
				   /* For the client side validation*/
			    
					  $("#cname").blur(function()
				   {
					 var name=$("#cname").val();
					 if(name=="")
					  {
					    $("#cne").html("Name field is mandatory !");
						$("#cne").css("color", "#E74C3C");
					  }	
					  
					   else
					   $("#cne").html("");
					   }); 
					   
				 
				 $("#cemail").blur(function()
				   {
						var name=$("#cemail").val();
						 var exp2 =/^\w+([\.-]?\w+)*@\w+([\.-]?w+)*(\.\w{2,3})+$/;
						
						 if( (name=="") ||(!name.match(exp2)) )
								  {
									$("#cel").html("Enter valid email id!");
									$("#cel").css("color", "#E74C3C");
									}
									
						 else
						     $("#cel").html("");
					
					});	 
					
					  
				
					
					
				 	$("#cphone").blur(function()
				   {
						var name=$("#cphone").val();
						
						var exp =/^[0-9]+$/;
						if( (name=="") ||(!name.match(exp))||(name.length<6) )
						  {
							$("#cpn").html("pHONE is mandatory & contain 6 digit !");
							$("#cpn").css("color", "#E74C3C");
						  }	
						  
						   else
						   $("#cpn").html("");
					});	
					
					$("#caddress").blur(function()
				   {
						var name=$("#caddress").val();
						
						
						if(name=="")
						  {
							$("#cad").html("Enter the address !");
							$("#cad").css("color", "#E74C3C");
						  }	
						  
						   else
						   $("#cad").html("");
					});
					
					$("#username").blur(function()
				   {
						var name=$("#username").val();
					if(name=="")
						  {
						   $("#us").html("create a username !");
						   $("#us").css("color", "#E74C3C"); 	
						   }  
						   else{ $("#us").html(""); }
						   });
					$("#username").change(function()
				   {
						var usname=$("#username").val();
 
					 $.ajax({
                     method:"POST",
					 url:"compunameajax.php",
					 data:{a1:usname},
					 }).done(function(data)
                     {
						
                       $("#us").html(data);
                       $("#us").css("color", "#E74C3C");					   
					 });				
						  
						 
						 
						   
					
				   }); 
					 
					$("#password").blur(function()
				   {
						var name1=$("#password").val();
						
						var exp =/^[0-9]+$/;
						if( (name1=="") ||(!name1.match(exp))||(name1.length<6) )
						  {
							$("#pd").html("password contain 6 digit !");
							$("#pd").css("color", "#E74C3C");
						  }	
						  
						   else
						   $("#pd").html("");
					});	
					
					$("#repassword").blur(function()
				   {
						var name2=$("#repassword").val();
						var name1=$("#password").val();
						
						if((name2=="")||(name1!=name2))
						  {
							$("#rpd").html("password mismatch !");
							$("#rpd").css("color", "#E74C3C");
						  }	
						  
						   else
						   $("#rpd").html("");
					});	
					$("#domain").change(function()
				   {
					     var name=$("#domain").val();
						
					     if((name=="select")||(name=="") )
					       
						   {
							$("#dom").html("Select Domain!");
							$("#dom").css("color", "#E74C3C");
						   }	
						  
						   else
						   $("#dom").html("");
					});	 
					 
					
			});	
					
	
			   </script>
	
</head>
<body>

	<header id="header">
		<div class="container">
			<a href="index.html" id="logo" title=""></a>
			<div class="menu-trigger"></div>
			<nav id="menu">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="events.php">About us</a></li>
					<li><a href="plportal.php">Placement portal</a></li>
 				</ul>
				<ul>
					<li><a href="recrt.php">Recruiters</a></li>
					<li><a href="#fancy" class="get-contact">Contact</a></li>
					
					<li><a href="compnylogin.php">Login</a></li>
   				</ul>
			</nav>
			<!-- / navigation -->
		</div>
		<!-- / container -->
	
	</header>
	<!-- / header -->
	
	<div class="divider"></div>
	
	
		<div class="container">

			
			<!-- / sidebar -->
	
		</div>
		<!-- / container -->

				<h1 class="heading"align="center"> Company Registration Form</h1>
                   
            <div  class="form">
    		<form id="contactform" action="" method="post" enctype="multipart/form-data"> 
    			<p class="contact"><label for="name">Company Name</label></p> 
    			<input id="cname" name="cname" placeholder=""  type="text"> 
    			 <i id="cne"></i>
				
    			<p class="contact"><label for="email">Official Email</label></p> 
    			<input id="cemail" name="cemail" placeholder="example@domain.com" required="" type="email"> 
				<i id="cel"></i>
				
				<p class="contact"><label for="phone">Phone.No:</label></p> 
                <input id="cphone" name="cphone" placeholder="phone number" required="" type="text"> <br>
				<i id="cpn"></i>
				
				<p class="contact"><label for="address">Address</label></p> 
                <textarea id="caddress" name="caddress" placeholder="Address" ></textarea> <br>
                <i id="cad"></i>
				
                <p class="contact"><label for="username">Create a username</label></p> 
    			<input id="username" name="username" placeholder="username" required="" type="text"> 
    			 <i id="us"></i> <i id="us1"></i>			 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" name="password" required="">
                <i id="pd"></i> 
				   <br/></br>				
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required=""> 
                <i id="rpd"></i>
              
			
			<select id="domain"class="select-style dept" name="dom" required="" >
            <option value="select">Select Domain</option>
            <option value="ae">Applied Electronics</option>
            <option value="ec">Electronics & Communication</option>
			<option value="cm">Chemical Engineering</option>
			<option value="cs">Computer Science</option>
            <option value="cv">Civil</option>
			<option value="me">Mechanical</option>
            <option value="it">Information Technology</option>
			</select><i id="dom"></i><br><br>

            <input class="buttom" name="submit" id="submit"  value="Sign me up!" type="submit"> 	 
   </form> 
</div> 
<footer id="footer">
		<div class="container">
			<section>
				<article class="col-1">
					<h3>Contact</h3>
					<ul>
						<li class="address"><a href="#">151 W Adams St<br>Detroit, MI 48226</a></li>
						<li class="mail"><a href="#">contact@demnuniversity.com</a></li>
						<li class="phone last"><a href="#">(971) 536 845 924</a></li>
					</ul>
				</article>
		
				<article class="col-3">
					<h3>Social media</h3>
					<p>Visit our pages .</p>
					<ul>
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="google-plus"><a href="#">Google+</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="pinterest"><a href="#">Pinterest</a></li>
					</ul>
				</article>
				<article class="col-4">
					<h3>Newsletter</h3>
					<p>Reach us through email.</p>
					<form action="#">
						<input placeholder="Email address..." type="text">
						<button type="submit">Subscribe</button>
					</form>
					<ul>
						<li><a href="#"></a></li>
					</ul>
				</article>
			</section>
			<p class="copy">Copyright 2017 Demn University. Designed by <a href="" title="Designed by Vandelay Design" target="_blank"></a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->
	 <?php
	      if(isset($_POST['submit']))
		 {
	          $cname=$_POST['cname'];
			  $cemail=$_POST['cemail'];
			  $cphone=$_POST['cphone'];
			  $caddress=$_POST['caddress'];
			  $username=$_POST['username'];
		      $password=$_POST['password'];
			  $domain=$_POST['dom'];
			  $status=0;//if status =0 the profile will show in admin panel for approval
			 
			/*  $target="srgupload/";
			 $xx=$_FILES['resume']['name'];
			 $arr = explode(".",$xx);
			 if(end($arr)=="doc"||end($arr)=="txt")
			 {
		      $target=$target.basename($_FILES['resume']['name']);
			  if(move_uploaded_file($_FILES['resume']['tmp_name'],$target))
			  {  
		       echo "</br> file uploaded successfully";
			   echo "<script>alert('$target')</script>";
			   $resume=$target; */
			   require_once("dbconnect.php");
			  $qry=$dbh->prepare("insert into companyreg values(?,?,?,?,?,?,?,?,?)");
			  $val=array('',$cname,$cemail,$cphone,$caddress,$username,$password,$domain,$status);
			  $excu=$qry->execute($val);
              if($excu)
			  {
				  echo "<script>alert('Company Registered Successfully!!')</script>";
				  echo "<script>alert('You can login only after admin verified!!')</script>";
				  /* session_start();
				    $qry=$dbh->query("SELECT * FROM companyreg WHERE comid = (SELECT MAX( comid ) FROM companyreg )"); 
				   $excu=$qry->execute();
				   $qry->setFetchMode(PDO::FETCH_ASSOC);
				   $res=$qry->fetch();
				   $nam= $res['name'];
				   
				  $_SESSION['user']=$nam;
				  $_SESSION['id']=$res['comid']; 
				  header("location:studplportal.php");*/
			   }
			  else
				  echo "<script>alert('Registration error')</script>"; 
 				  
			  }  
	 
         ?>		 
			   
</body>
</html>
