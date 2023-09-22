<?php
session_start();
if (isset($_SESSION['uname'])) {
		     	 	        require 'topbar.php';
		     	 	    }
		     	 	    else {
		     	 	        require 'topbar1.php';
		     	 	    }
		     	 	    require 'bottombar.php';
?>
<html>
<head>
    <title>VactionMaps - Ontzorgt op Vakantie</title>

    <!-- Google Font "Open Sans" -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.12.4.js"></script> 

    <link rel="stylesheet" type="text/css" href="/styles/style.css">
    <link rel="stylesheet" type="text/css" href="/styles/login.css">
    <meta charset="UTF-8">
</head>
<style>
    body {
        background-image:url(background1.jpg); no-repeat center center fixed; 
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;

    }
</style>


<body>
	<br><br>
    <center><span id="eenaccount" style="color:white;">E nieuw account, een nieuw begin.</span></center><br><br>
	<center><span id="persoonlijk" style="color:white;">Maak uw persoonlijke VacationMapS-account aan</span></center><br><br><br>

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
<br>
<?php


require('config.php');

if (isset($_POST['submit']))
{
 $email1 = $_POST['email1'];
 $email2 = $_POST['email2'];
 $pass1 = $_POST['pass1'];
 $pass2 = $_POST['pass2'];

 if($email1 == $email2 && $pass1 == $pass2) /* D E N C C  B O O O I I I ' ' ' ' */
 {
  
   //All good
   $name = mysql_escape_string($_POST['name']);
   $lname = mysql_escape_string($_POST['lname']);
   $uname = mysql_escape_string($_POST['uname']);
   $email1 = mysql_escape_string($_POST['email1']);
   $email2 = mysql_escape_string($_POST['email2']);
   $pass1 = mysql_escape_string($_POST['pass1']);
   $pass2 = mysql_escape_string($_POST['pass2']);

   $pass1 = md5($pass1);
   //Check if username is taken
   $check = mysql_query("SELECT * FROM users WHERE uname = '$uname'")or die(mysql_error());
   if (mysql_num_rows($check)>=1) echo "Username already taken";
   //Put everyting in DB
   else{
   mysql_query("INSERT INTO `users` (`id`, `name`, `lname`, `uname`, `email`, `pass`) VALUES (NULL, '$name', '$lname', '$uname', '$email1', '$pass1')") or die(mysql_error());
   $_SESSION['uname'] = $uname ;
   $_SESSION['name'] = $name ;
   $_SESSION['lname'] = $lname ;
   $_SESSION['email1'] = $email1 ;
   #header("Location: updateprofile.php");
   #header("Location: userprefs.php");
   header("Location: welkom.php");
   }
 }
 else{
  echo "Sorry, your emails or your passwords do not match. <br />";
 }




}
else{
$form = <<<EOT

<style>
  .loginput {
    padding: 10px 10px 10px 10px;
    margin: 1px;
    width: 150px;
  }
 </style>
<h1 style="color:black; font-family: 'Open Sans', sans-serif; font-size:160%; margin-top: -4px;" >Maak een account</h1>
<form action="register.php" method="POST">
<input placeholder="Voornaam" class="loginput" type="text" name="name" style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; "/><br />
<input placeholder="Achternaam" class="loginput" type="text" name="lname" style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; "/><br />
<input placeholder="Gebruikersnaam" class="loginput" type="text" name="uname" style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; "/><br />
<input placeholder="E-mailadres" class="loginput" type="text" name="email1" style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; "/><br />
<input placeholder="Herhaal e-mailadres" class="loginput" type="text" name="email2" style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; "/><br />
<input placeholder="Wachtwoord" class="loginput" type="password" name="pass1" style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; "/><br />
<input placeholder="Herhaal wachtwoord" class="loginput" type="password" name="pass2" style=" border: 0; outline: 0; background: transparent; border-bottom: 1px solid black; "/><br /><br></div>
<input style="background-color:#50A34B; width:304px; height:50px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; color:white; font-size:20px" type="submit" value="Registreer" name="submit" /><br>
</form>
<br><a href="login.php" style="color: white; font-family: 'Open Sans', sans-serif;">Al een account?</a>
EOT;

echo $form;


}
?>

</body>
</html>

<?php
require 'bottombar.php';
?>