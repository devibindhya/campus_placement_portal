<!DOCTYPE html>
<head>
</head>
	<body>
	
		<?php
		    $usnme=$_POST['a1'];
            require_once("dbconnect.php");
			$qry=$dbh->prepare("select*from studreg where username=?");
			$val=array($usnme);
			$excu=$qry->execute($val);
			$qry->setFetchMode(PDO::FETCH_ASSOC);
			$res=$qry->fetch();
			
			if($res)
				echo "username already exist";
		 ?>
	
	</body>
</html>