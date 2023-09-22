<?php
session_start();
$_SESSION['localLevel'] = "State";
$_SESSION['mapFocusCountry'] = "Verenigde Staten";
$_SESSION['mapFocusState'] = NULL; 

/*
 $_SESSION['Hoogteligging'] = array('min'=> $_POST['locatieType'], 'max' => $_POST['locatieType']+500);
 $_SESSION['Temperatuur'] = array('min'=> $_POST['temp-min'], 'max' => $_POST['temp-max']);
 $_SESSION['Luchtvochtigheid'] = array('min'=> $_POST['lv-min'],'max' => $_POST['lv-max']);
$_SESSION['Zonkracht'] = array('min'=> 0, 'max' => $_POST['zonkracht-max']); 
$_SESSION['Neerslag'] = array('min'=> 0, 'max'=> $_POST['neerslag-max']);  */
//make all arrays with min max!!!
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
$_SESSION['Hoogteligging'] = array('min'=> 0, 'max' => 500);
$_SESSION['Temperatuur'] = array('min'=> 0, 'max' => 15);
$_SESSION['Luchtvochtigheid'] = array('min'=> 0,'max' => 300);
$_SESSION['Zonkracht'] = array('min'=> 0, 'max' => 300); 
$_SESSION['Neerslag'] = array('min'=> 0, 'max'=> 300); 

echo (include 'alt.php');
?>