<?php
session_start();
?>
<html>
<head>
<title>VactionMaps - Ontzorgt op Vakantie</title>

<!-- Google Font "Open Sans" -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.12.4.js"></script> 

<link rel="stylesheet" type="text/css" href="/styles/style.css">
<link rel="stylesheet" type="text/css" href="/styles/login.css">

</head>
<body>
   
   <!-- Navigatiebalk code -->
   <div id="header"> 
		<div class="logo">
			<h5>VacationMaps</h5>
		</div>
		<div class="navigation">
			<ul>
		 	 	<li><a class="active" href="login.html">Login</a></li>
  				<li><a href="contact.html">Contact</a></li>
  				<li><a href="overons.html">Over ons</a></li>
  				<li><a href="start.html">Home</a></li>
			</ul>
		</div>
	</div> 
	
	<div class="registerbutton"><h3>Heeft u al een account? Log dan <a href="login.php">hier</a> in!</h3>
	
	<style>
  .loginscherm {
   border-radius: 10px;
   border-style: solid;
   border-width: 2px;
   width: 300px;
   border-color: #50A34B;
   box-shadow: 0px 0px 10px #888888;
   background-color: #50A34B;
   
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
    color: red;
    padding: 10px 10px 10px 10px;
    width: 150px;

  }
 </style>

<table action="../register.php" method="POST">
<tr><td>First Name:</td><td><input class="loginput" type="text" name="name" placeholder="Voornaam" /></td></tr> 
 <br />
<tr><td>Last Name:</td> <td><input class="loginput" type="text" name="lname" placeholder="Achternaam"/></td></tr><br />
<tr><td>Username:</td> <td> <input class="loginput" type="text" name="uname" /></td></tr><br />
<tr><td>Email:</td> <td> <input class="loginput" type="text" name="email1" /></td></tr><br />
<tr><td>Confirm Email:</td> <td> <input class="loginput" type="text" name="email2" /></td></tr><br />
<tr><td>Password:</td> <td> <input class="loginput" type="password" name="pass1" /></td></tr><br />
<tr><td>Confirm Password:</td> <td> <input class="loginput" type="password" name="pass2" /></td></tr><br />
<input type="submit" value="Register" class="loginput" name="submit" />
</table>
EOT;

echo $form;


}
?>
</div>
</body>
</html>