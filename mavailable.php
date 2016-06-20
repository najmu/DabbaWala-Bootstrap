<?php

$con=new MongoClient();
$db=$con->dabba;


  
	$pincode=$_GET['check'];
	$pin=array("Pincode"=>$pincode);
	if ($db->Zipcode->findOne($pin))
	{
		 $url="indexnew.html?=";
  echo"<script>alert('We deliver in your Area.');location='$url'</script>";
	/*$message = "We deliver in your Area";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo"<a href=index1.php>Back to Home</a>";*/
	//header('Location:index1.php');
 	
	}
 else {
	  $url="indexnew.html?=";
  echo"<script>alert('We dont deliver in your Area. Please Try different location');location='$url'</script>";
	/*$message = "We dont deliver in your Area";
	echo "<script type='text/javascript'>alert('$message');</script>";
	echo"<a href=index1.php>Back to Home</a>";*/
   	
	
}



?>
