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
	  $myusername = $_SESSION["usernm"];


$row1=array("Username"=>$myusername);
if ($db->signup->findOne($row1))
{
$_SESSION['log']=true;
$_SESSION['usernm']=$myusername;
        
       
        
	if($row1)
	{
	
        $temp1 = $row1['Username'];
	}
       
}	
 }	 
}

echo "<!DOCTYPE>\n"; 
echo "<html lang=\"en\">\n"; 
echo "<head>\n"; 
echo "	<meta charset=\"utf-8\">\n"; 
echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n"; 
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n"; 
echo "    <title>DabbaWala</title>\n"; 
echo "    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">\n"; 
echo "    <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "    <link href=\"css/signin.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
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
echo " <li role=\"presentation\"><a href=\"mdisp.html\">Feedback</a></li>\n"; 
echo " <li role=\"presentation\"><a href=\"contact.html\">Contact Us</a></li>\n"; 
echo "</ul>\n"; 
echo "<ul class=\"nav nav-pills pull-right\">\n"; 
echo "  <li role=\"presentation\">\n"; 
echo "  <form action=\"mlogout.php\" method=\"get\"><button class=\"btn btn-primary\" name=\"adminlogout\">Logout</button></form>\n"; 
echo "  </li>\n"; 
echo "</ul>\n"; 
echo "   </div>\n"; 
echo "</nav>\n"; 
echo "<hr class=\"featurette-divider\">\n"; 
echo "<div class=\"container\">\n"; 
echo "\n"; 
echo "      <form action=\"mfeedback.php\" method=\"get\" class=\"form-signin\" role=\"form\">\n"; 
echo "        <h2 class=\"form-signin-heading\">Provide Feedback $myusername</h2>\n"; 
echo "        <label for=\"inputfeedback\" class=\"sr-only\">Feedback</label>\n"; 
echo "        <input type=\"text\" id=\"inputusername\" name=\"feedback\" class=\"form-control\" placeholder=\"Enter Feedback here\" required autofocus>\n"; 
echo "        <br class=\"featurette-divider\">\n"; 
echo "        \n"; 
echo "        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Submit</button>\n"; 
echo "      </form>\n"; 
echo "\n"; 
echo "    </div> <!-- /container -->\n"; 
echo "\n"; 
echo " <footer class=\"footer\">\n"; 
echo "      <p class=\"pull-right\"><a href=\"#\">Back to top</a></p> \n"; 
echo "      <ul class=\"nav nav-pills\">\n"; 
echo "  <li role=\"presentation\" class=\"active\"><a href=\"indexnew.html\">Home</a></li>\n"; 
echo "  <li role=\"presentation\"><a href=\"about.html\">About Us</a></li>\n"; 
echo "  <li role=\"presentation\"><a href=\"menu.html\">Menu</a></li>\n"; 
echo " <li role=\"presentation\"><a href=\"plan.html\">Plan</a></li>\n"; 
echo " <li role=\"presentation\"><a href=\"mdisp.html\">Feedback</a></li>\n"; 
echo " <li role=\"presentation\"><a href=\"contact.html\">Contact Us</a></li>\n"; 
echo "</ul>\n"; 
echo "<div align=\"right\">\n"; 
echo "<span class=\"text-muted\">Developed by Najmuddin Kapadia.  All Right Reserved 2016.   </span>\n"; 
echo "</div>\n"; 
echo "        <!--<p class=\"text-muted\">Developed by Najmuddin Kapadia. All Right Reserved 2016.</p>-->\n"; 
echo "    </footer>\n"; 
echo "    </body>\n"; 
echo "    </html>\n";
?>