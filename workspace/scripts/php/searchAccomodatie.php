
<?php 
session_start();
 $_SESSION['prijs'] =array($_POST['price-min'], $_POST['price-max']);
 $_SESSION['voorzieningen'] =array($_POST['vRol'], $_POST['vTv'], $_POST['vLift'], $_POST['vRS']);
 $_SESSION['aantalMensen'] = $_POST['aantalMensen']; 
 $_SESSION['afstandZiek'] = $_POST['afstandZiek']; 
 $_SESSION['reistijd'] =array($_POST['reistijd-min'], $_POST['reistijd-max']);
$_SESSION['reisdatum'] =array($_POST['reisBegin'], $_POST['reisEind']);
$_SESSION['reiswijze'] = $_POST['reisSoort']; 
$_SESSION['reisprijs'] =array($_POST['reisprice-min'], $_POST['reisprice-max']);

?>  
