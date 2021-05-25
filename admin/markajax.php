<!DOCTYPE html>
<head>
</head>
	<body>
	  
	 <table class="t1">
		<tr>
		<th>Sl.No</th>
		<th>Name</th>
		<th>Stud ID</th>
		<th>DOB</th>
		<th>Gender</th>
		<th>Email</th>
		<th>Phone No:</th>
		<th>Dept</th>
		<th>Semester</th>
		<th>Mark</th>
		<th>Resume</th>
		
		<th colspan='3'>Operations</th>
		</tr>
		<?php
		    $mark1=$_POST['a1'];
			//$mark1=6;
			if($mark1<=7)
			$mark2=$mark1+.99;
		   else
			   $mark2=10;
            require_once("dbconnect.php");
			$qry=$dbh->prepare("select *,count(*) as count from studreg where mark between ? and ? ");
			$val=array($mark1,$mark2);
			$excu=$qry->execute($val);
			$qry->setFetchMode(PDO::FETCH_ASSOC);
			while($res=$qry->fetch())
			{
		
			     static $c=1;
				 	?>
		
		         <tr>
				    <td><?php echo $res['count']; ?>  </td>
				   <td><?php echo $res['name']; ?>  </td>
				   <td><?php echo $res['idno']; ?>  </td>
				   <td><?php echo $res['dob']; ?>  </td>
				   <td><?php echo $res['gender']; ?>  </td>
				   <td><?php echo $res['email']; ?>  </td>
				   <td><?php echo $res['phone']; ?>  </td>
				   <td><?php echo $res['dept']; ?>  </td>
				   <td><?php echo $res['sem']; ?>  </td>
				   <td><?php echo $res['mark']; ?>  </td>
				   <td><?php echo $res['resume']; ?>  </td>
				   <td><a class="link" href="addstud.php?idno=<?php echo $res['idno']?>">Apply </a></td>
				   <td><a class="link" href="rejectstud.php?idno=<?php echo $res['idno']?>">Reject </a></td>
				   </tr>
			<?php
			$c++;
			}
			
			/* &&eventid=<?php echo $eventid?>*/
		    ?>
			


	</body>
</html>