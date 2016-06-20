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
    $area = $_GET["area"];
   $pin  = $_GET["pincode"];
	
	
	
$data = array(  'Area'=>$area,
				
				'Pincode'=>$pin,
									
									);
   

	if($db->Zipcode->insert($data))
{
		$url="adminpanel.html?=";
  echo"<script>alert('Successfully Inserted');location='$url'</script>";
	
}
else
{
	$url="adminpanel.html?=";
  echo"<script>alert('Insertion Unsuccessful');location='$url'</script>";
   	
}

$con->close();
}
} 
else
 {

    echo "Please log in first to see this page.";

}
?>
