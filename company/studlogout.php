<!DOCTYPE html>
<html>
<head>
<title>Logout </title>
</head>
	<body>    <!-- log out -->
	       <?php        
	            session_start();
				session_destroy();
	            header("location:home.php");
			?>
	</body>
</html>	 
	