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

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<!-- Google Font "Open Sans" -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="/styles/style.css">

</head>

<body background="background1.jpg" style="background-size: cover;">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
<br><br><br><br><br>
	<table align="center" >
	    <tr><td><button style="border-color:#4CAF50; margin:2.5px; border-radius: 10px;  width: 600px; height:300px;background-color:#FFFFFF;"><h3 style="color: black; margin: 0px; padding: 14px 14px 14px 14px; font-family: 'Open Sans', sans-serif; font-weight: 600; font-size: 28px;">Wij zijn vacationmaps.-----!------</h3></button></td></tr></table>
	</table>
</body>
</html>

<?php
require 'bottombar.php';
?>