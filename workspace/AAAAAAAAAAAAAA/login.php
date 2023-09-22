<?php
session_start();
?>
<html>
 <body>
Heeft u nog geen account? Maak er dan nu <a href="register.php">hier</a> een aan!
<br>
<div class="loginvak"> <?php




require('config.php');

if(isset($_POST['submit']))
{
 $uname = mysql_escape_string($_POST['uname']);
 $pass = mysql_escape_string($_POST['pass']);
 $pass = md5($pass);

 $check = mysql_query("SELECT * FROM `users` WHERE `uname` = '$uname' AND `pass` = '$pass'");
 if(mysql_num_rows($check) >= 1){
  header("Location: welkom.php");
  exit();
 }
 else{

  echo "Wrong password";
 }
}
else{

 $form = <<<EOT
 <form action="login.php" method="POST">
 Username: <input type="text" name="uname"><br>
 Password: <input type="password" name="pass"><br>
 <input type="submit" name="submit" value="Log in">

EOT;

echo $form;
}
?>
</div>
</body>
</html>