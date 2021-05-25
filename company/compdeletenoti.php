<!DOCTYPE html>
<html>
	<head>
	</head>
	    <!-- Deleting the notification company published -->
		<body>
		<?php
		$id=$_GET['id'];
		$stat=2;// rejected notifiction set to status=2
	     require_once("dbconnect.php");
		  $qry=$dbh->prepare("update notify set status=? where id=?"); 
		  $val=array($stat,$id);
		  $excu=$qry->execute($val);
		  if($excu)
			  echo "notification rejected";
		  else
			  echo "error in rejection";
		 ?>
		</body>
	
</html>