<?php


session_start();

$con = new MongoClient();
   $db = $con->dabba;


$myusername=$_GET['adminid'];
 
$mypassword=$_GET['adminpwd'];
 


/*$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);*/



if($myusername == "admin" && $mypassword=="password")

{
$_SESSION['log'] = "true";


header("location:adminpanel.html");

}


else 
{
/*$message = "Wrong Username or password";
  echo "<script type='text/javascript'>alert('$message');</script>";
  echo"<br>";
  echo"<br>";
 /echo"<a href=admin.php>Try Again</a>";*/
 $url="admin.html?=";
  echo"<script>alert('Wrong Username or password... Please Try Again');location='$url'</script>";
	
//echo "Wrong Username or Password";

}

?>