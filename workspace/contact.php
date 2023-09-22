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

<html>

<head>
<title>VacationMaps - Ontzorgt op Vakantie</title>


<!-- Google Font "Open Sans" -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.12.4.js"></script>  
  
  <!-- Latest compiled and minified CSS -->

<!-- Latest compiled and minified JavaScript -->

<link rel="stylesheet" type="text/css" href="/styles/style.css">

</head>

<body background="background1.jpg" style="background-size: cover;">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
<br><br><br><br><br>
	<table align="center" >
	    <tr><td><button style="border-color:#4CAF50; margin:2.5px; border-radius: 10px;  width: 600px; height:300px;background-color:#FFFFFF;"><h1 style="color: black; font-weight: bold; margin: 0px; padding: 14px 14px 14px 14px; font-family: 'Open Sans', sans-serif; font-weight: 600; font-size: 75px;">CONTACT</h1><h1 style="color: grey; margin: 0px; padding: 14px 14px 14px 14px; font-family: 'Open Sans', sans-serif; font-weight: 600; font-size: 30px;">LIVE-CHAT powered by VacationMapS</h1><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><h3 style="color: black; margin: 0px; padding: 14px 14px 14px 14px; font-family: 'Open Sans', sans-serif; font-weight: 600; font-size: 28px;">Een ogenblik geduld. Alle medewerkers zijn momenteel bezet...</h3><p>Resterende wachttijd: 2 uur en 4 minuten</p></button></td></tr></table>
	</table>

</body>
</html>

