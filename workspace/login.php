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
		     	require 'bottombar1.php';
?>

<html>

<head>
 <meta charset="UTF-8">
 <title>VactionMaps - Ontzorgt op Vakantie</title>


<!-- Google Font "Open Sans" -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.12.4.js"></script> 

<link rel="stylesheet" type="text/css" href="/styles/login.css">

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
		<center><span id="eenaccount">Eén account. Al het beste van VacationMapS.</span></center><br><br>
		<center><span id="persoonlijk">Inloggen met uw persoonlijke VacationMapS-account</span></center><br><br><br>
	<div class="loginvak">
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
	 <br><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><img src="neudefuser.png" width="100px"><br><br></a>
	<?php




require('config.php');

if(isset($_POST['submit']))
{
 $_SESSION['uname'] = $_POST['uname'];
 
 $uname = mysql_escape_string($_POST['uname']);
 $pass = mysql_escape_string($_POST['pass']);
 $pass = md5($pass);

 $check = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname' AND `pass` = '$pass'");
 if(mysql_num_rows($check) >= 1){
  header("Location: home.php");
  exit();
 }
 else{

  echo '<div class="overlay"></div>';
 }
}

 ?>
 
 

 <style>
  .loginput {
    padding: 10px 10px 10px 10px;
    width: 150px;
    margin:1px;
     border: 0;
  outline: 0;
  background: transparent;
  border-bottom: 1px solid black;

  }
 </style>
 <h1 style="color:black; font-family: 'Open Sans', sans-serif; font-size:160%; margin-top: -4px;" >Log in</h1>

 <form action="login.php" method="POST">
 <input class="loginput" type="text" name="uname" placeholder="Username"><br>
 <input class="loginput" type="password" name="pass" placeholder="Password"><br><br></div>
 <input type="submit" name="submit" style="background-color:#50A34B; width:304px; height:50px; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px; color:white; font-size:20px; margin-left:4px; border:none;" value="Inloggen">
 <br><br>
 <a href="register.php">Account aanmaken?</a>





  </center>
  </div>  
</body>
</hmtl>

