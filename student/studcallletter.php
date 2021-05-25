<?php
	session_start();
?>
<!DOCTYPE html>
<head>
</head>
	<body>
	       <!--Generating Call letter  -->
	<?php
	$stud=$_SESSION['user'];
	 $sid=$_SESSION['id'];
    require_once("dbconnect.php");	
	$qry=$dbh->prepare("SELECT * FROM callletter 
						INNER JOIN companyreg 
						ON companyreg.comid = callletter.comid 
						WHERE (studidno =?)");
	$val=array($sid);
	$excu=$qry->execute($val);
	$qry->setFetchMode(PDO::FETCH_ASSOC);
		$res=$qry->fetch();
		$post=$res['post'];
		$cname=$res['company_name'];
		$date=$res['date'];
		$addr=$res['address'];
		$phon=$res['phone'];
		$email=$res['email'];
		
		?>		
				
	<h1> Invitation to Interview</h1>

Dear <?php echo $stud; ?>,

<p>Thank you for applying for the position of <?php echo $post; ?> with <?php echo $cname; ?> .</p>

<p>We would like to invite you to come to our office to interview for the position of <?php echo $post; ?> . Your interview has been scheduled <?php echo $date;  ?>, 10 am, at <?php echo $addr; ?>.</p>

<p>Please call me at <?php echo $phon; ?>  or email me at <?php echo $email; ?>  if you have any questions or need to reschedule.
</p>
<p>Sincerely,</p>

<p>Manager</p>
<address>
<?php echo $addr; ?>
<?php echo $phon; ?>
<?php echo $email; ?>
</address>

<button onclick="myFunction()">Print this page</button>
</br>
<button onclick()><a href="studplportal.php"> BACK TO PLACEMENT PORTAL PAGE</a></button>

<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>