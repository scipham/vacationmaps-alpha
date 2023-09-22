<?php

$definedCountry="Verenigde Staten"
$getStringFree = preg_replace('/\s+/', '', $definedCountry);
echo $getStringFree;
$checkLogin = file_get_contents("./cc_data/".$getStringFree."_States.json");
$possibleStates = json_decode( $checkLogin, TRUE );


?>