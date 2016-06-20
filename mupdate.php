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

/*
    if ( session_status() == php_session_none)
	 {
      echo"login to update";
	header('Location:login.php');
	
	  }
	 else
	 {
     */
	
	$name = $_SESSION["usernm"];
	$pass  = $_GET["password"];
	$email  = $_GET["email"];
	$mobile = $_GET["contact"];
	$add1 = $_GET["add1"];
	$add2 = $_GET["add2"];
	$add3 = $_GET["add3"];    
    $zip  = $_GET["pincode"];
 

$data = array('$set' => array('Contact'=>$mobile,
							'Email'=>$email,
							'Password'=>$pass, 
							'Address1'=>$add1, 
							'Address2'=>$add2, 
							'Address3'=>$add3,
							'Zipcode'=>$zip ) );
$pin=array("Pincode"=>$zip);
	if ($db->Zipcode->findOne($pin))
	{
		

	//header('Location:index1.php');
	
if($db->signup->update(array("Username"=>$name), $data))
{
	$url="home.php?=";
  echo"<script>alert('Updated Successfully');location='$url'</script>";
}
else 
{
$url="update.php?=";
  echo"<script>alert('Update Unsucessful, Please Try Again');location='$url'</script>";
}
}
 else {
	  //$message = "We dont deliver in your Area. Please Try different location";
	   $url="update.php?=";
  echo"<script>alert('We dont deliver in your Area. Please Try different location');location='$url'</script>";
	//echo "<script type='text/javascript'>alert('$message');</script>";
	//echo"<a href=update.php>Try Again to Update Profile</a>";

}
	 }	
}	
else
 {

    echo "Please log in first to see this page.";

}
//}	

?>
