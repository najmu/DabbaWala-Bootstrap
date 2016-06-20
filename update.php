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
//$_POST['n'] = $_SESSION['n'];
//$_POST['no'] = $_SESSION['no'];

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
echo "  <meta charset=\"utf-8\">\n"; 
echo "    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n"; 
echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">\n"; 
echo "    <title>DabbaWala</title>\n"; 
echo "    <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">\n"; 
echo "    <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "    <link href=\"css/signin.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "    <link href=\"css/sticky-footer.css\" rel=\"stylesheet\" type=\"text/css\">\n"; 
echo "<script type=\"text/javascript\"> \n"; 
echo "function validate() \n"; 
echo "{ \n"; 
echo "   if( document.myForm.password.value == \ ) \n"; 
echo "  { \n"; 
echo "    alert(\"Please provide your password!\");\n"; 
echo "     document.myForm.password.focus(); \n"; 
echo "    return false; \n"; 
echo "   }\n"; 
echo "  if( document.myForm.email.value == \ ) \n"; 
echo "   { \n"; 
echo "    alert( \"Please provide your Email!\" ); \n"; 
echo "   document.myForm.email.focus() ; \n"; 
echo "     return false; \n"; 
echo "  }\n"; 
echo "  if( document.myForm.add1.value == \ ) \n"; 
echo "   {\n"; 
echo "   alert( \"Please provide your Address!\" ); \n"; 
echo "   document.myForm.add1.focus();\n"; 
echo "     return false; \n"; 
echo "   }\n"; 
echo "    if( document.myForm.add2.value == \) \n"; 
echo "  {\n"; 
echo "    alert(\"Please provide City!\" ); \n"; 
echo "     document.myForm.add2.focus(); \n"; 
echo "     return false; \n"; 
echo "   }\n"; 
echo " if( document.myForm.add3.value == \) \n"; 
echo "  {\n"; 
echo "    alert(\"Please provide State!\" ); \n"; 
echo "     document.myForm.add3.focus(); \n"; 
echo "     return false; \n"; 
echo "   }\n"; 
echo "    if( document.myForm.pincode.value == \ || \n"; 
echo "          isNaN( document.myForm.pincode.value ) || \n"; 
echo "         document.myForm.pincode.value.length != 6 || document.myForm.pincode.value < 100000 ) \n"; 
echo "  { \n"; 
echo "     alert(\"Please provide 6 digit pincode.\" ); \n"; 
echo "     document.myForm.pincode.focus() ; \n"; 
echo "     return false; \n"; 
echo "   }\n"; 
echo "    if( document.myForm.contact.value == \ || \n"; 
echo "           isNaN( document.myForm.contact.value ) ||\n"; 
echo "           document.myForm.contact.value.length != 10 || document.myForm.contact.value < 1000000000 ) \n"; 
echo "   { \n"; 
echo "   alert( \"Please provide 10 digit number.\" ); \n"; 
echo "    document.myForm.contact.focus(); \n"; 
echo "     return false; \n"; 
echo "  }\n"; 
echo "     confirm(\"Are you sure you want to submit\");\n"; 
echo "    document.myForm.submit.onsubmit();\n"; 
echo "    }\n"; 
echo "    </script> \n";
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
echo "<hr class=\"featurette-divider\">\n"; 
echo "<div class=\"container\">\n"; 
echo "\n"; 
echo "      <form action=\"mupdate.php\" onsubmit=\"return validate()\" method=\"get\" class=\"form-signin\" role=\"form\">\n"; 
echo "        <h2 class=\"form-signin-heading\">Update your profile $myusername</h2>\n"; 
echo "        <label for=\"inputpassword\" class=\"sr-only\">Password</label>\n"; 
echo "        <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"New Password\" required autofocus>\n"; 
echo "        <br class=\"featurette-divider\">\n"; 
echo "       <label for=\"inputemail\" class=\"sr-only\">Email</label>\n"; 
echo "        <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" placeholder=\"New Email\" required autofocus>\n"; 
echo "        <br class=\"featurette-divider\">\n"; 
echo "        <label for=\"inputcontact\" class=\"sr-only\">Contact</label>\n"; 
echo "        <input type=\"number\" id=\"contact\" name=\"contact\" class=\"form-control\" placeholder=\"New Contact No.\" required autofocus>\n"; 
echo "        <br class=\"featurette-divider\">\n"; 
echo "        <label for=\"inputadd1\" class=\"sr-only\">Address</label>\n"; 
echo "        <input type=\"textbox\" id=\"add1\" name=\"add1\" class=\"form-control\" placeholder=\"New Address\" required autofocus>\n"; 
echo "        <br class=\"featurette-divider\">\n"; 
echo "        <label for=\"inputcity\" class=\"sr-only\">City</label>\n"; 
echo "        <input type=\"textbox\" id=\"add2\" name=\"add2\" class=\"form-control\" placeholder=\"New City\" required autofocus>\n"; 
echo "        <br class=\"featurette-divider\">\n"; 
echo "        <label for=\"inputstate\" class=\"sr-only\">State</label>\n"; 
echo "        <input type=\"textbox\" id=\"add3\" name=\"add3\" class=\"form-control\" placeholder=\"New State\" required autofocus>\n"; 
echo "        <br class=\"featurette-divider\">\n"; 
echo "        <label for=\"inputpincode\" class=\"sr-only\">Pincode</label>\n"; 
echo "        <input type=\"number\" id=\"pincode\" name=\"pincode\" class=\"form-control\" placeholder=\"Pincode\" required autofocus>\n"; 
echo "        <br class=\"featurette-divider\">\n"; 
echo "        \n"; 
echo "        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Update</button>\n"; 
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
echo " <li role=\"presentation\"><a href=\"mdisp.php\">Feedback</a></li>\n"; 
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