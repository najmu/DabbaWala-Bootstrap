<?php


   $con = new MongoClient();
   $db = $con->dabba;
   
   


if(!$con)
{
echo"connection not established";
}
else
{
    $nam = $_GET["nm"];
    $dob=$_GET["dob"];
	$gender  = $_GET["sex"];
	$mobile = $_GET["contact"];
	$email  = $_GET["email"];
	$username=$_GET["usernm"];
    $pass  = $_GET["password"];
	$cllg=$_GET["college"];
	$add1 = $_GET["add1"];
	$add2 = $_GET["add2"];
	$add3 = $_GET["add3"]; 
	$zip  = $_GET["pincode"];
	$th1=NULL;
	$th2=NULL;
	$th3=NULL;
	$th4=NULL;
	$th5=NULL;
	$feedback=NULL;
	$payment=NULL;
	
	
$data = array(  'Name'=>$nam,
				'Dob'=>$dob,
				'Sex'=>$gender,
				'Contact'=>$mobile,
				'Email'=>$email,
				'Username'=>$username,
				'Password'=>$pass,
				'College'=>$cllg,
				'Address1'=>$add1,
				'Address2'=>$add2,
				'Address3'=>$add3,
				'Zipcode'=>$zip,
				'Daily_Dabba'=>$th1,
				'Mini_Dabba'=>$th2,
				'Regular_Dabba'=>$th3,
				'Maharaja_Dabba'=>$th4,
				'Nonveg_Dabba'=>$th5,
				'Feedback'=>$feedback,
				'Payment'=>$payment
									);
   

  
	
	$pin=array("Pincode"=>$zip);
	if ($db->Zipcode->findOne($pin))
	{
		//$url="login.html?=";
  echo"<script>alert('We deliver in your Area');</script>";
		
	/*$message = "We deliver in your Area";
	echo "<script type='text/javascript'>alert('$message');</script>";
	//header('Location:index1.php');*/

	if($db->signup->insert($data))
{
	 $url="login.html?=";
  echo"<script>alert('Signup Sucessful');location='$url'</script>";
//header('Location: login.php');
}

	}
 else {
	 $url="signup.html?=";
  echo"<script>alert('We dont deliver in your Area. Please Try different location');location='$url'</script>";
	  /*$message = "We dont deliver in your Area. Please Try different location";
	  
	echo "<script type='text/javascript'>alert('$message');</script>";*/
	
	/*echo" Signup Unsuccessful.";
	echo"<br>";
	echo"<br>";
	echo"<a href=signup.php>SIGNUP again with different location.</a>";*/
   	
}


}
?>
