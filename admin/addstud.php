<!DOCTYPE html>
<head>
</head>
	<body>
	
			  
     		  
	
		<?php
		     $sid=$_GET['idno'];
			$eventid=$_GET['eventid'];
			$stat=5;//admin forwarded 
            require_once("dbconnect.php");
			$qry=$dbh->prepare("update studreg set status=?,eventid=? where idno=?");
			
			$val=array($stat,$eventid,$sid);
			$excu=$qry->execute($val);
			/* $qry->setFetchMode(PDO::FETCH_ASSOC);
			$res=$qry->fetch(); */
			
			if($excu)
				echo "<script>alert('Application submited to company');window.location='testing2.php';</script> ";
			
			
			  
			
		    ?>
			


	</body>
</html>