<?php
session_start();
?>
<html>
    <head>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <link rel="stylesheet" type="text/css" href="/styles/style.css">
        <link rel="stylesheet" type="text/css" href="/styles/topbar.css">
        <link rel="stylesheet" type="text/css" href="/styles/topbar1.css">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    </head>
    <body>
        <div id="header"> 
		    <div class="logo">
			    <h5 id="topname"><a href="home.php" style=":hover {text-decoration: none}">VacationMaps</a></h5>
		    </div>
		    <div class="navigation">
		    	<ul>
		     	 	<?php
		     	 	    if (isset($_SESSION['uname'])) {
		     	 	        echo "
		     	 	            <li><a class='topknop' href='logout.php'>Logout</a></li>
		     	 	        ";
		     	 	        
		     	 	        echo "
		     	 	        	<li><a class='topknop'><b>"
		     	 	        	.
		     	 	        	$_SESSION['uname']
		     	 	        	. 
		     	 	        	"</b></a></li>
		     	 	        ";
		     	 	        

		     	 	    }
		     	 	    else {
		     	 	        echo "<li><a class='loginknop' href='login.php'>Inloggen</a></a></li>";
		     	 	    } ?>
		     	 	
  		    		<li><a class="topknop" href="contact.php">Contact</a></li>
  		    		<li><a class="topknop" href="overons.php">Over ons</a></li>
  		    		<li><a class="topknop" href="start.php">Home</a></li>
	    		</ul>
	    	</div>
	    </div>
    </body>
</html>


