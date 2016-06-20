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
 
    $pay  = $_GET["pay"];

    


$data = array('$set' => array('Payment'=>$pay));

if($db->signup->update(array("Username"=>$name), $data))
   $url="home.php?=";
  echo"<script>alert('Payment Successful');location='$url'</script>";

} 

	}
	else {
		$url="login.html?=";
  echo"<script>alert('Please Log in first to make Payment');location='$url'</script>";
 
}


?>
