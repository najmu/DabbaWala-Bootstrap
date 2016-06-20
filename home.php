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
echo "\n"; 
echo "<hr class=\"featurette-divider\">\n"; 
echo "<div class=\"container\">\n"; 
echo "<form action=\"mavailable.php\" method=\"get\"> \n"; 
echo "<div class=\"col-lg-12\">\n"; 
echo "    <div class=\"input-group\">\n"; 
echo "    <input type=\"text\" class=\"form-control\" name=\"check\" placeholder=\"Enter Pincode of your Area\">\n"; 
echo "      <span class=\"input-group-btn\">\n"; 
echo "        <button class=\"btn btn-primary\" type=\"submit\">CHECK AVAILABILITY</button>\n"; 
echo "      </span>\n"; 
echo "    </div><!-- /input-group -->\n"; 
echo "  </div><!-- /.col-lg-12 -->\n"; 
echo "</form>\n"; 
echo "</div>\n"; 
echo "<br class=\"featurette-divider\">\n"; 
echo "<div class=\"container\">\n"; 
echo " <h1>User Panel</h1>\n"; 
echo " </div>\n"; 
echo "<!--<div class=\"jumbotron\">\n"; 
echo " <div class=\"container\">\n"; 
echo "  <h1>Admin Panel</h1>\n"; 
echo "</div>\n"; 
echo "</div>-->\n"; 
echo "<br class=\"featurette-divider\">\n"; 
echo "<div class=\"container\">\n"; 
echo "<div class=\"row placeholders\">\n"; 
echo "<div class=\"col-md-3 col-sm-3 placeholder\">\n"; 
echo "              <img src=\"user.jpg\" width=\"200\" height=\"200\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">\n"; 
echo "              <h4>Update Personnel Info.</h4>\n"; 
echo "              <form action=\"update.php\" method=\"get\"><button class=\"btn btn-primary\" name=\"updateprofile\">Update Personnel Info.</button></form>\n"; 
echo "            </div>\n"; 
echo "            <div class=\"col-md-3 col-sm-3 placeholder\">\n"; 
echo "              <a href=\"menu.html\"><img src=\"user.jpg\" width=\"200\" height=\"200\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\"></a>\n"; 
echo "              <h4>Weekly Menu</h4>\n"; 
echo "              <a href=\"menu.html\"><button class=\"btn btn-primary\" name=\"menu\">Weekly Menu</button></a>\n"; 
echo "            </div>\n"; 
echo "            <div class=\"col-md-3 col-sm-3 placeholder\">\n"; 
echo "              <a href=\"plan.html\"><img src=\"user.jpg\" width=\"200\" height=\"200\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\"></a>\n"; 
echo "              <h4>Meal Plans</h4>\n"; 
echo "              <a href=\"plan.html\"><button class=\"btn btn-primary\" name=\"mealsplan\">Meal Plans</button></a>\n"; 
echo "            </div>\n"; 
echo "            <div class=\"col-md-3 col-sm-3 placeholder\">\n"; 
echo "              <img src=\"user.jpg\" width=\"200\" height=\"200\" class=\"img-responsive\" alt=\"Generic placeholder thumbnail\">\n"; 
echo "              <h4>Feedback</h4>\n"; 
echo "              <form action=\"feedback.php\" method=\"get\"><button class=\"btn btn-primary\" name=\"feedback\">Feedback</button></form>\n"; 
echo "            </div>\n"; 
echo "          </div>\n"; 
echo "          </div>\n"; 
echo "\n"; 
echo "<footer class=\"footer\">\n"; 
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
echo "<span class=\"text-muted\" >Developed by Najmuddin Kapadia.  All Right Reserved 2016.   </span>\n"; 
echo "</div>\n"; 
echo " </body>\n"; 
echo " </html>\n";
}
}
 else
	 {

    echo "Please log in first to see this page.";

}
?>