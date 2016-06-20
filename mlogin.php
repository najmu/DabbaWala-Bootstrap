<?php
session_start();


// Connect to server and select databse.
$con=new MongoClient();
$db=$con->dabba;
if(!$con)
{
  echo "Could not connect";
}
else
{
$myusername=$_GET['usernm']; 
$mypassword=$_GET['password']; 
/*$_SESSION['n']=$myusername;
if(isset($_SESSION['n']))
	echo "WELCOME".$myusername;*/
$data=array("Username"=>$myusername,"Password"=>$mypassword);
if ($db->signup->findOne($data))
{
//if($db->signup->auth("Username"==$myusername,"Password"==$mypassword));
$_SESSION['log']=true;
$_SESSION['usernm']=$myusername;
header('Location: home.php');
}
else 
 {
 /* $message = "Wrong Username or password";
  echo "<script type='text/javascript'>alert('$message');</script>";
  echo"<br>";
  echo"<br>";*/
  
  $url="login.html?=".$_SESSION['usernm']."&pwd=".$_SESSION['password']."$submit=";
  echo"<script>alert('Wrong Username or password');location='$url'</script>";
  
 /* echo"<a href=login.php>Try Again</a>";
  
	echo"<style>
	body 
	{
	background:url('fail.jpg') no-repeat center;	
	}
	</style>";
  echo "Wrong Username or Pasword";*/
 }
}
?>
