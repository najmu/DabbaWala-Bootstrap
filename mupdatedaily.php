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
	
	$mon  = $_GET["monday"];
	$tue  = $_GET["tuesday"];
	$wed = $_GET["wednesday"];
	$thu = $_GET["thursday"];
	$fri = $_GET["friday"];
	$sat = $_GET["saturday"];    
    
 

$data = array('$set' => array('Monday'=>$mon,
							'Tuesday'=>$tue,
							'Wednesday'=>$wed, 
							'Thursday'=>$thu, 
							'Friday'=>$fri, 
							'Saturday'=>$sat) );

if($db->daily->update(array(), $data))
{
	$url="adminpanel.html?=";
  echo"<script>alert('Updated Sucessfully');location='$url'</script>";
  
	/*echo"Update Sucessful";
    header('Location: adminpanel.php');*/
}
else 
{
$url="updatedaily.html?=";
  echo"<script>alert('Update Unsucessful, Please Try Again');location='$url'</script>";
}
	
}	
else
 {

    echo "Please log in first to see this page.";

}
//}	

?>
