<!DOCTYPE html>
<meta charset="UTF-8">
<?php
session_start();
if (isset($_SESSION['uname'])) {
		     	 	        require 'topbar.php';
		     	 	    }
		     	 	    else {
		     	 	        require 'topbar1.php';
		     	 	    }
		     	 	    
		     	 	    $varUname = $_SESSION['uname'];
		     	 	    
require 'bottombar.php';

?>

<html>
    
 <head>
 <meta charset="UTF-8">
 <title>VactionMaps - Ontzorgt op Vakantie</title>


<!-- Google Font "Open Sans" -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.12.4.js"></script> 

<link rel="stylesheet" type="text/css" href="profiel.css">
<script src="profiel.js"></script>

</head>  

<body>
	
	<div class="bgimg">
		
		<center><h1 style="margin:0px;">Mijn VacationMaps</h1></center>
   
</div>

<center><img class="profielfoto" src="neudefuser.png"></img></center>
	


<center><h1 class="naam" style="color:#4D4B4C;"><?php

$varUname = $_SESSION['uname'];


$servername = "vweb10.nitrado.net";
    $username = "ni208411_2sql1";
    $password = "3ea32a32";
    $dbname = "ni208411_2sql1";
    
    $con = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT name, lname FROM users WHERE uname = '$varUname' ";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)){
    $name=$row['name'];
    echo $name;
    echo "&nbsp;";
    echo $row['lname'];
}

	
$con->close();  

?></h1>

<h2 class="woonplaats"><?php

$servername = "vweb10.nitrado.net";
    $username = "ni208411_2sql1";
    $password = "3ea32a32";
    $dbname = "ni208411_2sql1";
    
    $con = new mysqli($servername, $username, $password, $dbname);

$query = "SELECT woonplaats, name, lname, email, postcode FROM users WHERE uname = '$varUname' ";
$result = mysqli_query($con,$query);

while($row=mysqli_fetch_array($result)){
	echo $row['woonplaats'];
}
$con->close();

?>
, The Netherlands
</h2>



</center>

 <div class="profielmenu">
                
                <ul>
                    <li><input type="button" value="Filters" class="profilebutton" onclick="showDiv1()" style="width:169.69px" /><script>function showDiv1() { document.getElementById('filtervak').style.display = "block"; document.getElementById('reizenvak').style.display = "none"; document.getElementById('berichtenvak').style.display = "none"; document.getElementById('gegevensvak').style.display = "none"; document.getElementById('instellingenvak').style.display = "none";}</script></li>
                    <li><input type="button" value="Reizen" class="profilebutton" onclick="showDiv2()" style="width:169.69px" /><script>function showDiv2() { document.getElementById('reizenvak').style.display = "block"; document.getElementById('filtervak').style.display = "none"; document.getElementById('berichtenvak').style.display = "none"; document.getElementById('gegevensvak').style.display = "none"; document.getElementById('instellingenvak').style.display = "none";}</script></li>
                    <li><input type="button" value="Berichten" class="profilebutton" onclick="showDiv3()" style="width:169.69px" /><script>function showDiv3() { document.getElementById('berichtenvak').style.display = "block"; document.getElementById('filtervak').style.display = "none"; document.getElementById('reizenvak').style.display = "none"; document.getElementById('gegevensvak').style.display = "none"; document.getElementById('instellingenvak').style.display = "none";}</script></li>
                    <li><input type="button" value="Gegevens" class="profilebutton" onclick="showDiv4()" style="width:169.69px" /><script>function showDiv4() { document.getElementById('gegevensvak').style.display = "block"; document.getElementById('filtervak').style.display = "none"; document.getElementById('reizenvak').style.display = "none"; document.getElementById('berichtenvak').style.display = "none"; document.getElementById('instellingenvak').style.display = "none";}</script></li>
                    <li><input type="button" value="Instellingen" class="profilebutton" onclick="showDiv5()" style="width:169.69px" /><script>function showDiv5() { document.getElementById('instellingenvak').style.display = "block"; document.getElementById('filtervak').style.display = "none"; document.getElementById('reizenvak').style.display = "none"; document.getElementById('berichtenvak').style.display = "none"; document.getElementById('gegevensvak').style.display = "none";}</script></li>
                </ul>
                
                
                
            </div>
        
            <div id="filtervak">
                <h1 style="margin:0; font-family:'Open Sans', sans-serif; color:#50A34B; padding:20px 0px 0px 585px; font-size:35px;">Filters</h1>
            </div>
            
            <div id="reizenvak">
                <h1 style="margin:0; font-family:'Open Sans', sans-serif; color:#50A34B; padding:20px 0px 0px 585px; font-size:35px;">Bewaarde Reizen</h1>
            </div>
            
            <div id="berichtenvak">
                <h1 style="margin:0; font-family:'Open Sans', sans-serif; color:#50A34B; padding:20px 0px 0px 585px; font-size:35px;">Berichten</h1>
            </div>
            
            <div id="gegevensvak">
                
                
                <h1 style="margin:0; font-family:'Open Sans', sans-serif; color:#50A34B; padding:20px 0px 0px 585px; font-size:35px;">Gegevens</h1>
	            <h2 style="margin:0; font-family:'Open Sans', sans-serif; color:#4D4B4C; padding:20px 0px 0px 585px; font-size:20px;">Algemene gegevens</h2>
	
	<table class="gegevenswijzigtabel">
		<tr><td>Voornaam</td><td><input class="textvak" value="<?php $con = new mysqli($servername, $username, $password, $dbname); $query = "SELECT name FROM users WHERE uname = '$varUname' "; $result = mysqli_query($con,$query); while($row=mysqli_fetch_array($result)){ echo $row['name'];}$con->close(); ?>"></input></td></tr>
		<tr><td>Achternaam</td><td><input class="textvak" value="<?php $con = new mysqli($servername, $username, $password, $dbname); $query = "SELECT lname FROM users WHERE uname = '$varUname' "; $result = mysqli_query($con,$query); while($row=mysqli_fetch_array($result)){ echo $row['lname'];}$con->close(); ?>"></input></td></tr>
		<tr><td>Postcode</td><td><input class="textvak" value="<?php $con = new mysqli($servername, $username, $password, $dbname); $query = "SELECT postcode FROM users WHERE uname = '$varUname' "; $result = mysqli_query($con,$query); while($row=mysqli_fetch_array($result)){ echo $row['postcode'];}$con->close(); ?>"></input></td></tr>
		<tr><td>Land</td><td><input class="textvak" value="Netherlands"></input></td></tr>
		<tr><td>Email</td><td><input class="textvak" value="<?php $con = new mysqli($servername, $username, $password, $dbname); $query = "SELECT email FROM users WHERE uname = '$varUname' "; $result = mysqli_query($con,$query); while($row=mysqli_fetch_array($result)){ echo $row['email'];}$con->close(); ?>"></input></td></tr>
	</table>
                <br><br>
               <h2 style="margin:0; font-family:'Open Sans', sans-serif; color:#4D4B4C; padding:20px 0px 0px 585px; font-size:20px;">Wachtwoord Wijzigen</h2> 
                
                <table class="gegevenswijzigtabel">
                	<tr><td>Wachtwoord</td><td><input type="password" class="textvak" value="<?php $con = new mysqli($servername, $username, $password, $dbname); $query = "SELECT password FROM users WHERE uname = '$varUname' "; $result = mysqli_query($con,$query); while($row=mysqli_fetch_array($result)){ echo $row['password'];}$con->close(); ?>"></input></td></tr>
                	<tr><td>Nieuw Wachtwoord</td><td><input type="password" class="textvak"></input></td></tr>
                </table>
                <br><br>
                <input type="button" value="Opslaan" class="profilebutton2"/>
                
                <br><br><br><br><br><br><br><br><br>
                
            </div>
            
            <div id="instellingenvak">
                <h1 style="margin:0; font-family:'Open Sans', sans-serif; color:#50A34B; padding:20px 0px 0px 585px; font-size:35px;">Instellingen</h1>
            </div>
        




	
</body>
    
    
</html>

