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
 
    $dabba  = $_GET["nonveg"];

    


$data = array('$set' => array("Nonveg_Dabba"=>$dabba));

if($db->signup->update(array("Username"=>$name), $data))
header('Location: payment.html');

else
	
{echo"use different userid";

	    header('Location: login.html');

	}

	
}
	


   
//header("location:payment.php");


} 
else
 {

    echo "Please log in first to see this page.";

}



?>
