<?php
session_start();
?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Student Registration</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<link rel="stylesheet" media="all" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="srgstyle.css" media="all" />
    <link rel="stylesheet" type="text/css" href="srgdemo.css" media="all" /> 
	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	 <script>
	 	/* Student Registration Form Edit Functionality and validation*/
			  $(document).ready(function()
			   {
			      $("#name").blur(function()
				   {
				    var name=$("#name").val();
					var exp =/^[a-z A-Z]+$/;
					if((name=="") ||(!name.match(exp)) )
					  {
					    $("#ne").html("Name field is mandatory with alphabets only!");
						$("#ne").css("color", "#E74C3C");
					  }	
					  
					   else
					   $("#ne").html("");
					   });
					   
				 $("#idcard").blur(function()
				   { 
				   
				    var name=$("#idcard").val();
					
			        //var exp =/^[a-z A-Z]+$/;
					if(name=="")
					  {
					    $("#cd").html("ID is mandatory ");
						$("#cd").css("color", "#E74C3C");
					  }	
					  
					   else
					   $("#cd").html("");
					   });	    
					   
				 $("#email").blur(function()
				   {
						var name=$("#email").val();
						 var exp2 =/^\w+([\.-]?\w+)*@\w+([\.-]?w+)*(\.\w{2,3})+$/;
						
						 if( (name=="") ||(!name.match(exp2)) )
								  {
									$("#el").html("Enter valid email id!");
									$("#el").css("color", "#E74C3C");
									}
									
						 else
						     $("#el").html("");
					
					});	 
					
					   $("#birthmonth").change(function()
				     { 
				      var name=$("#birthmonth").val();
					 
					  if((name=="select") )
					  {
					    $("#bm").html("Enter date of birth!");
						$("#bm").css("color", "#E74C3C");
					  }	
					   else
					   $("#bm").html("");
					   });
					   
					     $("#birthday").blur(function()
				     {
				      var name=$("#birthday").val();
					  if((name=="") )
					  {
					    $("#bd").html("Enter date of birth!");
						$("#bd").css("color", "#E74C3C");
					  }	
					   else
					   $("#bd").html("");
					   });
					   
					    $("#birthyear").blur(function()
				     {
				      var name=$("#birthyear").val();
					  if((name=="") )
					  {
					    $("#by").html("Enter date of birth!");
						$("#by").css("color", "#E74C3C");
					  }	
					   else
					   $("#by").html("");
					   });
					   
					   
					$("#gender").change(function()
				   {
					     var name=$("#gender").val();
						 alert(name);
					     if((name=="select") )
					       
						   {
							$("#gr").html("Select Gender!");
							$("#gr").css("color", "#E74C3C");
						   }	
						  
						   else
						   $("#gr").html("");
					});	
					
					
					$("#phone").blur(function()
				   {
						var name=$("#phone").val();
						
						var exp =/^[0-9]+$/;
						if( (name=="") ||(!name.match(exp))||(name.length<6) )
						  {
							$("#pn").html("pHONE is mandatory & contain 6 digit !");
							$("#pn").css("color", "#E74C3C");
						  }	
						  
						   else
						   $("#pn").html("");
					});	
					
					$("#address").blur(function()
				   {
						var name=$("#address").val();
						
						
						if(name=="")
						  {
							$("#ad").html("Enter the address !");
							$("#ad").css("color", "#E74C3C");
						  }	
						  
						   else
						   $("#ad").html("");
					});
					/* username*/
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
					 url:"usernameajax.php",
					 data:{a1:usname},
					 }).done(function(data)
                     {
						
                       $("#us").html(data);
                       $("#us").css("color", "#E74C3C");					   
					 });				
						   
					
				   }); 
					 /* password*/
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
					
					$("#dept").change(function()
				   {
					     var name=$("#dept").val();
						
					     if((name=="select") )
					       
						   {
							$("#dt").html("Select Department!");
							$("#dt").css("color", "#E74C3C");
						   }	
						  
						   else
						   $("#dt").html("");
					});	
					
					$("#sem").change(function()
				   {
					     var name=$("#sem").val();
						
					     if((name=="select") )
					       
						   {
							$("#sm").html("Select SEMESTER!");
							$("#sm").css("color", "#E74C3C");
						   }	
						  
						   else
						   $("#sm").html("");
					});	
					
					  $("#marks").blur(function()
				     {
				      var name=$("#marks").val();
					  if((name=="") )
					  {
					    $("#mk").html("Enter marks!");
						$("#mk").css("color", "#E74C3C");
					  }	
					   else
					   $("#mk").html("");
					   }); 
 
			});		
	 </script>
	
</head>
<body>
          <?php
			$name=$_SESSION['user'];	
		  ?>

	<header id="header">
		<div class="container">
			<a href="index.html" id="logo" title="LBSITW">LBSITW</a>
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
	
	
		<div class="container">

			
			<!-- / sidebar -->
	
		</div>
		<!-- / container -->
	        <!--Autofill the datas inside the textbox fields -->
	         <?php
				$id=$_GET['id'];
				require_once("dbconnect.php");
				$qury=$dbh->prepare("select * from studreg where idno=?");
				$ary=array($id);
				$execu=$qury->execute($ary);
				$qury->setFetchMode(PDO::FETCH_ASSOC);
				$res=$qury->fetch();
              ?>
		    <h1 class="heading"align="center">Edit Student Details</h1>       
            <div  class="form">
    		<form id="contactform" action="" method="post" enctype="multipart/form-data"> 
    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name"  tabindex="1" type="text" value="<?php echo $res['name']; ?>"disabled> 
    			 <i id="ne"></i>
				<p class="contact"><label for="idcard">Admission No:</label></p> 
    			<input id="idcard" name="idcard" placeholder="ID  No:" required="" tabindex="2" type="text" value="<?php echo $res['idno']; ?>" disabled > 
				<i id="cd"></i>
				 <fieldset>
                 <label>Birthday</label>
                  <label class="month"> 
                  <select id="birthmonth"class="select-style" name="birthmonth" tabindex="3" >
                  <option value="select"> Select Month</option>
                  <option  value="01">January</option>
                  <option value="02">February</option>
                  <option value="03" >March</option>
                  <option value="04">April</option>
                  <option value="05">May</option>
                  <option value="06">June</option>
                  <option value="07">July</option>
                  <option value="08">August</option>
                  <option value="09">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12" >December</option>
                  </label>
                 </select> <i id="bm"></i>   
                <label>Day<input id="birthday" maxlength="2" name="birthday"  placeholder="Day" required=""tabindex="4"></label>
				<i id="bd"></i>  
                <label>Year <input id="birthyear" maxlength="4" name="birthyear" placeholder="Year" required="" tabindex="5"></label>
				<i id="by"></i>  
              </fieldset>
  
            <select id="gender" class="select-style gender" name="gender"  tabindex="6" >
            <option value="<?php echo $res['gender']; ?>" ><?php echo $res['gender']; ?></option>
            </select><i id="gr"></i>  <br><br>
				
    			<p class="contact"><label for="email">Email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" type="email" value="<?php echo $res['email']; ?>" tabindex="7"> 
				<i id="el"></i>
				
				<p class="contact"><label for="phone">Mobile phone</label></p> 
                <input id="phone" name="phone" placeholder="phone number"  type="text" value="<?php echo $res['phone']; ?>" tabindex="8"> <br>
				<i id="pn"></i>
				
				<p class="contact"><label for="address">Address</label></p> 
                <textarea id="address" name="address" placeholder="Address" tabindex="9"><?php echo $res['address']; ?></textarea> <br>
                <i id="ad"></i>
				
                <p class="contact"><label for="username">Create a username</label></p> 
    			<input id="username" name="username" placeholder="username" tabindex="10" value="<?php echo $res['username']; ?>" type="text" disabled> 
    			 <i id="us"></i> <i id="us1"></i>			 
                <p class="contact"><label for="password">Create a password</label></p> 
    			<input type="password" id="password" name="password" required="" tabindex="11" >
                <i id="pd"></i> 
				   <br/></br>				
                <p class="contact"><label for="repassword">Confirm your password</label></p> 
    			<input type="password" id="repassword" name="repassword" required="" tabindex="12"> 
                <i id="rpd"></i>
              
			
			<select id="dept"class="select-style dept" name="dept"  tabindex="13">
            <option value="<?php echo $res['dept']; ?>">Select dept</option>
             <option value="ae">Applied Electronics</option>
            <option value="ec">Electronics & Communication</option>
			<option value="cm">Chemical Engineering</option>
			<option value="cs">Computer Science</option>
            <option value="cv">Civil</option>
			<option value="me">Mechanical</option>
            <option value="it">Information Technology</option>
			</select><i id="dt"></i><br><br>
			
			
			<select id="sem" class="select-style sem" name="sem"  tabindex="14">
            <option value="<?php echo $res['sem']; ?>"><?php echo $res['sem']; ?></option>
            <option value="s1">Sem1</option>
            <option value="s2">Sem2</option>
			<option value="s3">Sem3</option>
            <option value="s4">Sem4</option>
			<option value="s5">Sem5</option>
            <option value="s6">Sem6</option>
			<option value="s7">Sem7</option>
            <option value="s8">Sem8</option>
			</select><i id="sm"></i><br><br>
			
			<p id="mark"class="contact"><label for="mark">Mark upto last Sem(in CGPA)</label></p> 
    		<input id="marks" name="mark" placeholder="Marks in Cgpa" value="<?php echo $res['mark']; ?>" tabindex="15" type="text">
			<i id="mk"></i>
			
            <p class="contact"><label for="resume">Upload Resume</label></p>
            <input id="resume" name="resume" tabindex="16" type="file" <?php echo $res['resume']; ?>/>	</br>		

            <input class="buttom" name="submit" id="submit" tabindex="17" value="Update Details!" type="submit"> 	 
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
			<p class="copy">Copyright 2017 Demn University. Designed by <a href="http://www.vandelaydesign.com/" title="Designed by Vandelay Design" target="_blank">Vandelay Design</a>. All rights reserved.</p>
		</div>
		<!-- / container -->
	</footer>
	<!-- / footer -->

	

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script>window.jQuery || document.write("<script src='js/jquery-1.11.1.min.js'>\x3C/script>")</script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
	
	 <?php
	    if(isset($_POST['submit']))
		 {
		      $birthmonth=$_POST['birthmonth'];
			  $birthday=$_POST['birthday'];
		      $year=$_POST['birthyear'];
		      $email=$_POST['email'];
			  $phone=$_POST['phone'];
			  $address=$_POST['address'];
		      $password=$_POST['password'];
			  $dept=$_POST['dept'];
			  $sem=$_POST['sem'];
			  $mark=$_POST['mark'];
			  
			 echo $date=$year."-".$birthmonth."-".$birthday;
		 
			 
			 $target="srgupload/";
			 $xx=$_FILES['resume']['name'];
			 $arr = explode(".",$xx);
			 if(end($arr)=="doc"||end($arr)=="txt")
			 {
		      $target=$target.basename($_FILES['resume']['name']);
			  if(move_uploaded_file($_FILES['resume']['tmp_name'],$target))
			  {  
		       echo "</br> file uploaded successfully";
			   echo "<script>alert('$target')</script>";
			   $resume=$target;
			     require_once("dbconnect.php");
				 echo "<script>alert('$date')</script>";
			  $qry=$dbh->prepare("update studreg set dob=?,email=?,phone=?,address=?,password=?,dept=?,sem=?,mark=?,
			  	  resume=? where idno=?");
			  $val=array($date,$email,$phone,$address,$password,$dept,$sem,$mark,$resume,$id);
			  $excu=$qry->execute($val);
              if($excu)
			  {
				  echo "<script>alert('data updated')</script>";
				  header("location:studplportal.php");
			  }
			  else
				  echo "<script>alert('updation error')</script>"; 
 				  
			  }
			  else
			  echo"</br> error";
			 }
			else 
				echo"file type is not permitted"; 

			}
	
         ?>		 
			   
</body>
</html>
