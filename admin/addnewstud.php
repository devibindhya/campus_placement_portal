<!DOCTYPE html>
<head>
</head>
	<body>  
		   <!--Approve a new candidate request by setting status =1 -->
			<?php
			    $sid=$_GET['idno'];
				
				$stat=1;//admin accepted
	            require_once("dbconnect.php");
				$qry=$dbh->prepare("update studreg set status=? where idno=?");
				$val=array($stat,$sid);
				$excu=$qry->execute($val);
				$qry->setFetchMode(PDO::FETCH_ASSOC);
				$res=$qry->fetch();
				
				if($res)
					echo "<script>alert(' Student added ')</script>";
			?>
	</body>
</html>