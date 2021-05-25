<?php
//sql connection
$dbh=new PDO("mysql:host=localhost;dbname=campus","root","");
if($dbh)
{
 //echo "Connection established successfully!!";
 }
 
  else
  echo "ERROR in database connection!!";
  
  
  
  
  
  /* 
  $servername = "localhost";
$username = "root";
$password ="";

try {
$conn = new PDO("mysql:host=$servername;dbname=devi", $username, $password);
 // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully"; 
}
catch(PDOException $e)
 {
echo "Connection failed: " . $e->getMessage();
}
*/
  
  
?>