<!DOCTYPE html>
<head>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
	<body>  
	        <!--Reject a company request by setting status =2 -->
		<?php
		    $comid=$_GET['comid'];
			$stat=2;
            require_once("dbconnect.php");
			$qry=$dbh->prepare("update companyreg set status=? where comid=?");
			$val=array($stat,$comid);
			$excu=$qry->execute($val);
			$qry->setFetchMode(PDO::FETCH_ASSOC);
			$res=$qry->fetch();
			
			if($res)
				echo "<script>alert(' Company rjected ')</script>";
		    ?>
	</body>
</html>