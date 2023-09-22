<?php
session_start();
if (isset($_SESSION['uname'])) {
		     	 	      require 'topbar.php';
		     	 	    }
		     	 	    else {
		     	 	        require 'topbar1.php';
		     	 	    }
		  	  //  require 'bottombar1.php';
?>

<html>
    <head>
<title>VactionMaps - Ontzorgt op Vakantie</title>

<!-- Google Font "Open Sans" -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.12.4.js"></script>  
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="/styles/style.css">
<script>
function changeDIV(Pars) { 
    var client = new XMLHttpRequest();
client.open('GET', './assets/Testing/'+Pars+'.txt');
client.onreadystatechange = function() {
  document.getElementById('contentsdiv').innerHTML = client.responseText;
}
client.send(); 
}
</script>
</head>

<body>
<div class="cover">	
<h2>Texas, Verenigde Staten</h2>
<br>
<br>
<br>
	<div style="width:500px;border:1px solid #000; background-color: #ffffff; width: 300px; margin-left: 10px">
		<h3 style="margin-left: 8px">Filters van toepassing:</h3><br>
		<p style="margin-left: 8px">&#10004; Temperatuur</p>
		<p style="margin-left: 8px">&#10004; Locatie</p>
		<p style="margin-left: 8px">&#10004; Luchtvochtigheid</p>
        <p style="margin-left: 8px">&#10008; Zonkracht</p>
      	<p style="margin-left: 8px">&#10008; Neerslag</p>
		</div>
</div>

<div class="maand">
<img src="./ArtboardTexas.png" style="margin-left: 50px" height="140" width="1600">	
</div>
<br>
<br>

<p><font size="5">Texas, een staat met buitengewoon landschap</font></p>
<p><font size="3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.</font></p>
<br>


<br>
<div style="position: absolute; left: 0px" class="buttonmenu">
<p><button type="button" onclick="changeDIV(1)" class="button1">Vind accomodaties</button></p>
<p><button type="button" onclick="changeDIV(2)" class="button1">Bekijk beoordelingen</button></p>
<p><button type="button" onclick="changeDIV(3)" class="button1">Vind activiteiten</button></button></p>
</div>
<br>
<br>

<div style="position: absolute; right: 70%; margin-right: 30px" id="contentsdiv">
</div>

</body>
</html>
