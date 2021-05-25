<!DOCTYPE html>
<html>
	<head>
		<title> Alloting Students</title>
		
	  <style>
	  
	  /*tabl*/
	 table
		{
			border-collapse:collapse;
			/*width:100%;*/
			height:200px;
			margin:0;
			overflow-x: scroll;
			
		}
        th
		{
           background-color:dodgerblue;
           color:floralwhite;
		   text-align:center;
		   padding:8px;
		    
		   font-size:18px;
		  
		} 
		th:hover
		{
		   background-color:lightgray;
           color:indigo;
		}
		  
		 
		tr
		{
        font-size:20px;
		background-color:#EBF5FB;
		color:#85929E;
		padding-top: 12px;
        padding-bottom: 12px;
        text-align: center;
		}
		tr:nth-child(even)
		{
           background-color:#D6EAF8  ;
           color:black;
		   font-size:18px;
		   
		 
		} 
		tr:hover
		{
           background-color:#D4E6F1;
           color:#1A5276;
		} 
		.link
		{
			text-decoration:none;
			color:red;
			font-size:20px;
			background-color:black;
		}
		.link:hover
		{
				background-color:yellow;
		}
		
/* Style The Dropdown Button */
.dropbtn {
    background-color: #3498DB;
    color: white;
    padding: 12px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color:#EBF5FB;
    min-width: 110px;
    //box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 10px;
    text-decoration: none;
    display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #AED6F1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    background-color: #2471A3;
}
</style>
   
	</head> <!-- Alloting Students to attend the placement by choosing the criteria-->
			<body>
			<?php
			//session_start();
			static $eventid;
			/* Get the particular event id passed through URL*/
			if(isset($_GET['id'])){
				
			$_SESSION['eventid']=$_GET['id'];}
			 ?>
			 <form action="testing2.php" method="post">
			  <div class="dropdown">
			  <select class="dropbtn" name="mdrop" >
			  <div class="dropdown-content">
			    <option value="">select mark</option> 
			    <option value="6">6.0 above</option>
			    <option value="7">7.0 above</option>
			    <option value="8">8.0 above</option>
				<option value="9">9.0 above</option>
			  </div>
			  </select>
			  
			  <select class="dropbtn" name="ddrop" >
			  <div class="dropdown-content">
			    <option value="">select dept</option> 
			    <option value="cs">CS</option>
			    <option value="cv">CE</option>
			    <option value="it">IT</option>
				<option value="me">ME</option>
			    <option value="ae">AE</option>
			  </div>
			  </select>
			</div>	
<BR/><BR/><BR/>
<input type="hidden" name="sub1"  value="<?php echo $_SESSION['eventid']; ?>">
 <input type="SUBMIT" name="sub"  value="Submit">
			</form>
			<table>
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
			
			<?PHP	 
			if(isset($_POST['sub']))
			{
	          $mark=$_POST['mdrop'];
	          $dept=$_POST['ddrop'];
	          $event=$_POST['sub1'];
			
			
			 require_once("dbconnect.php");
			 $stat=1;
	        if(($mark=='')  ||  ($dept==''))
	         {
				echo "<script>alert('Please select the mark and department !')</script>";	
			  }
           else
            {    
              $qry=$dbh->prepare("select * from studreg where mark >=? and dept=? and status=? "); 

			  $val=array($mark,$dept,$stat);


			$qry->setFetchMode(PDO::FETCH_ASSOC);
			
			while($res=$qry->fetch())
				{
				
					static $c=1;
				
				?>
			     <tr>
				    <td><?php echo $c; ?>  </td> 
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
				   <td><a class="link" href="addstud.php?idno=<?php echo $res['idno']?>&&eventid=<?php echo $eventid?>">Apply </a></td>
				   <td><a class="link" href="rejectstud.php?idno=">Reject </a></td>
				   </tr>
	            <?php 
                   $c++;				
				   } 
		  }		
}
			?>
			
</table>			
			</body>
</html>