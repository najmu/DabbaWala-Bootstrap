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
echo "   </div>\n"; 
echo "</nav>\n"; 
echo "\n";  

echo"<br class=\"featurette-divider\">\n";
echo"<br class=\"featurette-divider\">\n";
echo"<br class=\"featurette-divider\">\n";
echo"<br class=\"featurette-divider\">\n";
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


   /* if (session_status() == PHP_SESSION_DISABLED)
	 {
      echo"<script>alert('login first')</script>";
	header('Location: admin.php');
	  }
	 else
	 { */
	
	$query = $db->maharaja->find();
	
	if($query)
	{
		$data  = "<table class=\"table table-striped table-bordered table-hover\">";
		$data .= "<thead style='color:green'>";
		$data .= "<tr class=\"success\">";
		$data .= "<th>Monday</th>";
		$data .= "<th>Tuesday</th>";
		$data .= "<th>Wednesday</th>";
		$data .= "<th>Thursday</th>";
		$data .= "<th>Friday</th>";
		$data .= "<th>Saturday</th>";
		$data .= "</tr>";
		$data .= "</thead>";
		$data .= "<tbody>";
		
        
        foreach($query as $document)
		{
           $data .= "<tr>";
            $data .= "<td>" . $document ["Monday"] . "</td>";
            $data .= "<td>" . $document["Tuesday"]."</td>";
            $data .= "<td>" . $document["Wednesday"]."</td>";
            $data .= "<td>" . $document["Thursday"]."</td>";
			$data .= "<td>" . $document["Friday"]."</td>";
			$data .= "<td>" . $document["Saturday"]."</td>";
            $data .= "</tr>";
        }
        $data .= "</tbody>";
        $data .= "</table>";
		echo $data;
		
		
	/*echo '<pre>';

	foreach ( $query as $current )
    	print_r($current);

	echo '</pre>'; */
	echo"<br class=\"featurette-divider\">\n";
	echo "<div id=button align=\"center\">\n";
	echo "<button class=\"btn btn-primary\" type=\"button\" name=\"delete\" value=\"\" onClick=\"location.href='menu.html'\"><b>Go Back</b></button>\n";
	echo "</div>";
	}   	
	else
	{
	echo "<script>alert('The database is empty')</script>";
	}	
	//}

$con->close();
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


