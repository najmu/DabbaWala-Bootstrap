<?php
echo "<!DOCTYPE>\n"; 
echo "<html lang=\"en\">\n"; 
echo "<head>\n"; 
echo "	<meta charset=\"utf-8\">\n"; 
echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n"; 
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n"; 
echo "    <title>DabbaWala</title>\n"; 
echo "    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">\n"; 
echo "    <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "    <link href=\"css/carousel.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "    <link href=\"css/sticky-footer.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "    </head>\n"; 
echo "\n"; 
echo "<body background-image:url(\"background1.jpg\")>\n"; 
echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">\n"; 
echo "    <div class=\"container-fluid\">\n"; 
echo "        <div class=\"navbar-header\" role=\"navigation\">\n"; 
echo "<a class=\"navbar-brand\" href=\"#\">\n"; 
echo "        <img alt=\"Brand\" src=\"dabbawala.png\"></a>\n"; 
echo "        </div>\n"; 
echo "<ul class=\"nav nav-pills\">\n"; 
echo "  <li role=\"presentation\" class=\"active\"><a href=\"indexnew.html\">Home</a></li>\n"; 
echo "  <li role=\"presentation\"><a href=\"about.html\">About Us</a></li>\n"; 
echo "  <li role=\"presentation\"><a href=\"menu.html\">Menu</a></li>\n"; 
echo " <li role=\"presentation\"><a href=\"plan.html\">Plan</a></li>\n"; 
echo " <li role=\"presentation\"><a href=\"mdisp.php\">Feedback</a></li>\n"; 
echo " <li role=\"presentation\"><a href=\"contact.html\">Contact Us</a></li>\n"; 
echo "</ul>\n"; 
echo "<ul class=\"nav nav-pills pull-right\">\n"; 
echo "  <li role=\"presentation\">\n"; 
echo "  <form action=\"mlogout.php\" method=\"get\"><button class=\"btn btn-primary\" name=\"adminlogout\">Logout</button></form>\n"; 
echo "  </li>\n"; 
echo "</ul>\n"; 
echo "   </div>\n"; 
echo "</nav>\n"; 
echo "\n";  

echo"<br class=\"featurette-divider\">\n";
echo"<br class=\"featurette-divider\">\n";
echo"<br class=\"featurette-divider\">\n";
echo"<br class=\"featurette-divider\">\n";
echo"<br class=\"featurette-divider\">\n";
echo"<br class=\"featurette-divider\">\n";
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
	echo"<style>
	body 
	{
	background:url('new1.jpg') no-repeat center;	
	}
	</style>";


    if (session_status() == PHP_SESSION_DISABLED)
	 {
	 	$url="login.html?=";
  echo"<script>alert('Login First');location='$url'</script>";
	  }
	 else
	 {
	
	$query = $db->signup->find();
	
	if($query)
	{
		$data  = "<table class=\"table table-striped table-bordered table-hover\">";
		$data .= "<thead style='color:red'>";
		$data .= "<tr class=\"success\">";
		$data .= "<th>Name</th>";
		$data .= "<th>DOB</th>";
		$data .= "<th>Sex</th>";
		$data .= "<th>Contact</th>";
		$data .= "<th>Email</th>";
		$data .= "<th>UserName</th>";
		$data .= "<th>Password</th>";
		$data .= "<th>College</th>";
		$data .= "<th>Address1</th>";
		$data .= "<th>Address2</th>";
		$data .= "<th>Address3</th>";
		$data .= "<th>Zipcode</th>";
		$data .= "<th>Daily Dabba</th>";
		$data .= "<th>Mini Dabba </th>";
		$data .= "<th>Regular Dabba</th>";
		$data .= "<th>Maharaja Dabba</th>";
		$data .= "<th>Non Veg Dabba</th>";
		$data .= "<th>Feedback</th>";
		$data .= "<th>Payment</th>";
		$data .= "</tr>";
		$data .= "</thead>";
		$data .= "<tbody>";
		
        
        foreach($query as $document)
		{
           $data .= "<tr>";
            $data .= "<td>" . $document ["Name"] . "</td>";
            $data .= "<td>" . $document["Dob"]."</td>";
            $data .= "<td>" . $document["Sex"]."</td>";
            $data .= "<td>" . $document["Contact"]."</td>";
			$data .= "<td>" . $document["Email"]."</td>";
			$data .= "<td>" . $document["Username"]."</td>";
			$data .= "<td>" . $document["Password"]."</td>";
			$data .= "<td>" . $document["College"]."</td>";
			$data .= "<td>" . $document["Address1"]."</td>";
			$data .= "<td>" . $document["Address2"]."</td>";
			$data .= "<td>" . $document["Address3"]."</td>";
			$data .= "<td>" . $document["Zipcode"]."</td>";
			$data .= "<td>" . $document["Daily_Dabba"]."</td>";
			$data .= "<td>" . $document["Mini_Dabba"]."</td>";
			$data .= "<td>" . $document["Regular_Dabba"]."</td>";
			$data .= "<td>" . $document["Maharaja_Dabba"]."</td>";
			$data .= "<td>" . $document["Nonveg_Dabba"]."</td>";
			$data .= "<td>" . $document["Feedback"]."</td>";
			$data .= "<td>" . $document["Payment"]."</td>";
            $data .= "</tr>";
        }
        $data .= "</tbody>";
        $data .= "</table>";
		echo $data;
		
		echo"<br><br><br>";
		echo "<div id=button align=\"center\">\n";
echo "<button class=\"btn btn-primary\" onClick=\"location.href='adminpanel.html'\">Go Back </button><br><br>\n"; 
echo "\n"; 
echo "</div>\n";
		
	/*echo '<pre>';

	foreach ( $query as $current )
    	print_r($current);

	echo '</pre>'; */
	}   	
	else
	{
	echo "<script>alert('Wrong Username or the database is 	empty')</script>";
	}	
	}

$con->close();
}

} 
else
 {

    echo "Please log in first to see this page.";

}
echo "<footer class=\"footer\">\n"; 
echo "      <p class=\"pull-right\"><a href=\"#\">Back to top</a></p> \n"; 
echo "      <ul class=\"nav nav-pills\">\n"; 
echo "  <li role=\"presentation\" class=\"active\"><a href=\"indexnew.html\">Home</a></li>\n"; 
echo "  <li role=\"presentation\"><a href=\"about.html\">About Us</a></li>\n"; 
echo "  <li role=\"presentation\"><a href=\"menu.html\">Menu</a></li>\n"; 
echo " <li role=\"presentation\"><a href=\"plan.html\">Plan</a></li>\n"; 
echo " <li role=\"presentation\"><a href=\"mdisp.php\">Feedback</a></li>\n"; 
echo " <li role=\"presentation\"><a href=\"contact.html\">Contact Us</a></li>\n"; 
echo "</ul>\n"; 
echo "<div align=\"right\">\n"; 
echo "<span class=\"text-muted\" >Developed by Najmuddin Kapadia.  All Right Reserved 2016.   </span>\n"; 
echo "</div>\n"; 
echo "          </body>\n"; 
echo "          </html>\n";
?>


