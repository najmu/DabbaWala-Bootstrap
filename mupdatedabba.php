<?php


session_start();

$con = new MongoClient();
   $db = $con->dabba;





if($_GET['dabba'] == "daily")

{
$_SESSION['log'] = "true";


header("location:updatedaily.html");

}


else if($_GET['dabba'] == "mini")

{
$_SESSION['log'] = "true";


header("location:updatemini.html");

}

else if($_GET['dabba'] == "regular")

{
$_SESSION['log'] = "true";


header("location:updateregular.html");

}
else if($_GET['dabba']== "maharaja")

{
$_SESSION['log'] = "true";


header("location:updatemaharaja.html");

}
else if($_GET['dabba'] == "nonveg")

{
$_SESSION['log'] = "true";


header("location:updatenonveg.html");

}

else
{

echo "Wrong Username or Password";

}

?>