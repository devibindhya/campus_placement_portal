<!DOCTYPE html>
<html>
<head> <title>Video Upload </title>
</head>
<body>
<h1>Choose your video to upload</h1>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="vid" />	</br></br>	
<input type="text" name="newfile" />
<!--<input type="submit" value="Upload a new video" name="sub1" onclick="vid.click();newfile.value=vid.value;">-->
<input type="submit" value="submit" name="sub">
</form>
<?php
 if(isset($_POST['sub']))
  {
	$target="srgupload/";
	$xx=$_FILES['vid']['name'];
	$arr = explode(".",$xx);
			if(end($arr)=="mp4"||end($arr)=="wmv")
			 {
		      echo $target=$target.basename($_FILES['vid']['name']);
			  ?>
			  <video width="320" height="240" controls>
  				<source src="<?php echo $target;?>" type="video/mp4">
  			 </video>
			  <?php
			  if(move_uploaded_file($_FILES['vid']['tmp_name'],$target))
			  {  
		       echo "</br> file uploaded successfully";
			   echo "<script>alert('$target')</script>";
			   require_once("dbconnect.php");
			   $qry=$dbh->prepare("insert into video values(?)");
			   $val=array($target);
			   $excu=$qry->execute($val);
              	if($excu)
			 		echo "<script>alert('Database upadted !!')</script>";
			  	else
				  echo "<script>alert('DAtabase error !!')</script>";
				  
			  }
           else
			  echo"</br>  Move error";
			 }
			else 
				echo"file type is not permitted"; 

}			
?>	

</body>
</html> 		   