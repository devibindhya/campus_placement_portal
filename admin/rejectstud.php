<!DOCTYPE html>
<head>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
	<body>  
	          <!--Reject a new candidate request by setting status =2 -->
		<?php
		    $idno=$_GET['idno'];
			$stat=2;
            require_once("dbconnect.php");
			$qry=$dbh->prepare("update studreg set status=? where idno=?");
			$val=array($stat,$idno);
			$excu=$qry->execute($val);
			$qry->setFetchMode(PDO::FETCH_ASSOC);
			$res=$qry->fetch();
			
			if($res)
				echo "<script>alert(' Student rejected ')</script>";
		    ?>
	</body>
</html>