<!DOCTYPE html>
<head>
</head>
	<body>	  
	       <!--Approve a new company request by setting status =1 -->
		<?php
		    $comid=$_GET['comid'];
			$stat=1;
            require_once("dbconnect.php");
			$qry=$dbh->prepare("update companyreg set status=? where comid=?");
			$val=array($stat,$comid);
			$excu=$qry->execute($val);
			$qry->setFetchMode(PDO::FETCH_ASSOC);
			$res=$qry->fetch();
			
			if($res)
				echo "<script>alert(' Company added ')</script>"; 
		    ?>
	</body>
</html>