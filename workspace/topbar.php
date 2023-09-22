<?php
session_start();
?>
<html>
    <head>
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <link rel="stylesheet" type="text/css" href="/styles/topbar.css">
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    </head>
    <body>
        <div id="header"> 
		    <div class="logo">
			    <h5 id="topname">VacationMaps</h5>
		    </div>
		    <nav class="navigation">
		    	<ul class="menu">
					<li style="min-width:70px; padding-left:-10px"><a class="username" class="topknop" style="padding-left:10px;"><?php echo "<b>" . $_SESSION["uname"] . "</b>"; ?></a> 
					<ul class="sub-menut">
					    <li><a class="topknop" href="profiel.php">Profiel</a></li>
					    <li><a class="topknop" href="logout.php">Log uit</a></li>
					    </ul></li>
  		    		<li><a class="topknop" href="contact.php">Contact</a></li>
  		    		<li><a class="topknop" href="overons.php">Over ons</a></li>
  		    		<li><a class="topknop" href="start.php">Home</a></li>
	    		</ul>
	    	</nav>
	    </div>
    </body>
</html>


