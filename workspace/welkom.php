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
        <meta charset="UTF-8">
<title>VactionMaps - Ontzorgt op Vakantie</title>

<!-- Google Font "Open Sans" -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.12.4.js"></script> 

<link rel="stylesheet" type="text/css" href="/styles/style.css">
<link rel="stylesheet" type="text/css" href="/styles/login.css">


<body background="background1.jpg" style="background-size: cover; ">
	
	<br><br>
            <center><span id="eenaccount">Welkom <?php echo $_SESSION["uname"]; ?>,</span></center><br><br>
            <center><span id="persoonlijk">Om verder te gaan naar VacationMapS dient u eerst uw profiel bij te werken.</span></center><br><br><br>
            
            
            
<style>
  .loginscherm {
   border-top-left-radius: 10px;
   border-top-right-radius: 10px;
   border-style: solid;
   border-width: 2px;
   width: 300px;
   border-color: white;
   box-shadow: 0px 0px 10px #888888;
   background-color: white;
   
  }
  

  </style>
  <center><div class="loginscherm">
            
            
            <?php

            
            require('config.php');?>
            
          

<!-- action="updateprofile.php" -->
  <style>
  .welkominput {
    padding: 10px 10px 10px 10px;
    width: 150px;
    margin:1px;
    
  }
  .table {
      margin:0px;
      margin-top: -250px;
      padding:10px;
     
  } 
  
  .groenvak {
      height:330px;
  }
  
  td {
      font-family: 'Open Sans', sans-serif;
      color: white;
  }
 </style>
 <h1 style="color:black; font-family: 'Open Sans', sans-serif; font-size:160%; margin-top: 13px; margin-bottom:-20px;" >Profiel bijwerken</h1>
<div><form method="post" class="groenvak" style="font-family: 'Open Sans', sans-serif; margin-bottom:-15px; "><br>
<table class="table" cellpadding="0" cellspacing="0" style="color:black;">
<tr><td> <input placeholder="Voornaam" class="welkominput" type="text" name="name" value="<?php echo $_SESSION["name"]; ?>" required style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; "    /></td></tr><br><br>
<tr><td> <input placeholder="Achternaam" type="text" class="welkominput" name="lname"  value="<?php echo $_SESSION["lname"]; ?>" required style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; "/></td></tr><br /><br>
<tr><td> <input placeholder="Adres" type="text" class="welkominput" name="adres"  value="<?php echo $_SESSION["adres"]; ?>" required style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; "/></td></tr><br /><br>
<tr><td> <input placeholder="Postcode" type="text" class="welkominput" name="postcode"  value="<?php echo $_SESSION["postcode"]; ?>" required style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; " /></td></tr><br /><br>
<tr><td> <input placeholder="Woonplaats" type="text" class="welkominput" name="woonplaats"  value="<?php echo $_SESSION["woonplaats"]; ?>" required style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; " /></td></tr><br /><br>
<tr><td> <input placeholder="E-mailadres" type="text" class="welkominput" name="email1"  value="<?php echo $_SESSION["email1"]; ?>"  required style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; "/></td></tr><br /><br>
</table></div></div>
<input type="submit" value="Opsturen" name="Opdaatm" style="background-color:#50A34B; width:304px; height:50px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; color:white; font-size:20px" />
</form>







<?php
if (isset($_POST['Opdaatm'])) {
    #Gooit alles in de session:
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['lname'] = $_POST['lname'];
    #('uname' meer niet aanpasbaar)
    $_SESSION['adres'] = $_POST['adres'];
    $_SESSION['postcode'] = $_POST['postcode'];
    $_SESSION['woonplaats'] = $_POST['woonplaats'];
    $_SESSION['email1'] = $_POST['email1'];
    $_SESSION['pic'] = $_POST['pic'];

    
    #Verbinden met database
    $servername = "vweb10.nitrado.net";
    $username = "ni208411_2sql1";
    $password = "3ea32a32";
    $dbname = "ni208411_2sql1";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    #Variabelen
    $varUname = $_SESSION['uname'];
    $varName = $_SESSION['name'];
    $varLname = $_SESSION['lname'];
    $varAdres = $_SESSION['adres'];
    $varPostcode = $_SESSION['postcode'];
    $varWoonplaats = $_SESSION['woonplaats'];
    $varEmail1 = $_SESSION['email1'];
    $varPic = $_SESSION['pic'];
    
    
    #Query
    $sql = "
        UPDATE users 
        SET name='$varName', lname='$varLname', adres='$varAdres', postcode='$varPostcode', woonplaats='$varWoonplaats', email='$varEmail1', pic='$varPic' 
        WHERE uname='$varUname'
    ";
    


    $conn->close();  
    
    header("Location: https://vacationmaps-harbersbram.c9users.io/start.php");
    exit();
}
?> 



            
           
        </body>
    </head>
</html>

<?php
require 'bottombar.php';
?>