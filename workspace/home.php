<?php
session_start();
if (isset($_SESSION['uname'])) {
		     	 	        require 'topbar.php';
		     	 	    }
		     	 	    else {
		     	 	        require 'topbar1.php';
		     	 	    }
		     	     require 'bottombar1.php';
?>

<!DOCTYPE html>
<html>

<head>
<title>VacationMaps - Ontzorgt op Vakantie</title>

<!-- Google Font "Open Sans" -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

</head>

<body background="background1.jpg" style="background-size: cover;">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
	

	<br><br><br><br><br>
	<table align="center" >
	    <tr><td><form method=get action=/start.php><button style="border-color:#4CAF50; margin:2.5px; border-radius: 10px;  width: 600px; height:300px;background-color:#4CAF50;"><h3 style="color: white; margin: 0px; padding: 14px 14px 14px 14px; font-family: 'Open Sans', sans-serif; font-weight: 600; font-size: 28px;">Vind een vakantie!</h3></button></form></td></tr></table>
	    <table align="center"><tr><td><form method=get action=/overons.php><button style="border-color:#4CAF50; margin:2.5px;border-radius: 10px;  width: 300px;height:300px;background-color:#4CAF50;"><h3 style="color: white; margin: 0px; padding: 14px 14px 14px 14px; font-family: 'Open Sans', sans-serif; font-weight: 600; font-size: 28px;">Over ons</h3></button></form></td>
	    <td><form method=get action=/contact.php><button style=" border-color:#4CAF50;margin:2.5px; border-radius: 10px;  width: 300px;height:300px;background-color:#4CAF50;"><h3 style="color: white; margin: 0px; padding: 14px 14px 14px 14px; font-family: 'Open Sans', sans-serif; font-weight: 600; font-size: 28px;">Contact</h3></button></form></td></tr>
	</table>
	</div>
</body>
</html>