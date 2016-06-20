<?php

session_start();

if (isset($_SESSION['log']) && $_SESSION['log'] == true)
 {


$con = new MongoClient();
$db = $con->dabba;
   


if(!$con)

{

echo"connection not established";

exit;

}

else

{ 
    $myusername = $_GET["usernm"];
	
	
	$data=array("Username"=>$myusername);
if($db->signup->remove($data))
{
	$url="adminpanel.html?=".$_SESSION['usernm']."&pwd=".$_SESSION['password']."$submit=";
  echo"<script>alert('Deleted Sucessfully');location='$url'</script>";

	/*$message = "Deleted Successfully";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo"<br>";
    echo"<br>";
    echo"<a href=adminpanel.html>Go back</a>";
	//echo"Deleted Successfully";
	//header('Location:adminpanel.php');*/
}
else
$url="delete.html?=".$_SESSION['usernm']."&pwd=".$_SESSION['password']."$submit=";
  echo"<script>alert('Try Again,User doesn't exist);location='$url'</script>";

//echo"not deleted (Username not found)";
$con->close();
}

} 
else
 {

    echo "Please log in first to see this page.";

}
?>
