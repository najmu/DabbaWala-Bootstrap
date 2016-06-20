<?php

session_start();


if (isset($_SESSION['log']) && $_SESSION['log'] == true)
 {


 $con = new MongoClient();
   $db = $con->dabba;

if(!$con)

{

echo"connection not established";

}

else

{
    $name = $_SESSION["usernm"];
 
    $feed  = $_GET["feedback"];

    


$data = array('$set' => array('Feedback'=>$feed));

if($db->signup->update(array("Username"=>$name), $data))
{
	$url="home.php?=";
  echo"<script>alert('Feedback Entered Successfully');location='$url'</script>";
	//header('Location: home.php');
}
else
	
{
	$url="login.html?=";
  echo"<script>alert('Feedback Unsuccessful,Use different userid');location='$url'</script>";

	}

	
}
	


   
//header("location:payment.php");


} 
else
 {

    echo "Please log in first to see this page.";

}



?>
