<?php
session_start();
if (isset($_SESSION['uname'])) {
		     	 	        require 'topbar.php';
		     	 	    }
		     	 	    else {
		     	 	        require 'topbar1.php';
		     	 	    }
		     	 	   // require 'bottombar.php';
?>
<!DOCTYPE html>
<html>

<head>

<title>VactionMaps - Ontzorgt op Vakantie</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">


<!-- snip -->


<!-- JavaScripts for mapping  -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

        <script src="./assets/Drawable/ammaps/js/ammap.js" type="text/javascript"></script>
        <script src="./assets/Drawable/ammaps/themes/light.js" type="text/javascript"></script>
        <!-- map file should be included after ammap.js -->
		<script src="./assets/Drawable/ammaps/js_maps/worldLow.js" type="text/javascript"></script>
		<script src="./assets/Drawable/ammaps/js_maps/usa2Low.js" type="text/javascript"></script>
		<script src="./assets/Drawable/ammaps/js_maps/italyLow.js" type="text/javascript"></script>
		<script src="./assets/Drawabfle/ammaps/js_maps/franceLow.js" type="text/javascript"></script>
		<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
        <script>
        
/*

    var oReq = new XMLHttpRequest(); //New request object
    oReq.onload = function() {
        //This is where you handle what to do with the response.
        //The actual data is found on this.responseText
        alert(this.responseText); //Will alert: 42
    };
    oReq.open("get", "./assets/filleo/terminate.php", true);
    //                               ^ Don't block the rest of the execution.
    //                                 Don't wait until the request finishes to 
    //                                 continue.
    oReq.send();
    
    */
var countriesPercent = {unitedstates:Math.floor((Math.random() * 100) + 30), italy:Math.floor((Math.random() * 100) + 30)};
var statesUSA = {oregon:Math.floor((Math.random() * 100) + 30), newyork:Math.floor((Math.random() * 100) + 30), texas:Math.floor((Math.random() * 100) + 30)};
var statesItaly = {lombardia:Math.floor((Math.random() * 100) + 30), lazio:Math.floor((Math.random() * 100) + 30), silicia:Math.floor((Math.random() * 100) + 30)};

var getMyFav="world";
var earthlike = true;
var map = AmCharts.makeChart("chartdiv", {
  "type": "map",
  "theme": "light",
  "colorSteps": 100,
  "dataProvider": {
    "map": "" + getMyFav +"Low",
  //  "getAreasFromMap": true,
       "areas": [
      {"id": "IT",
	  "value": Math.floor((Math.random() * 100) + 30)},
      {"id": "US",
	  "value": Math.floor((Math.random() * 100) + 30)}
       ]
  },
  "areasSettings": {
    "autoZoom": false,
    "selectedColor": "#CC0000",
    "selectable": true,
     "balloonText": "[[value]] % in [[title]]"
  },
  "smallMap": {},
  "listeners": [{
    "event": "clickMapObject",
    "method": function(event) {
     if (earthlike==true) {
         earthlike=false;
     getMyFav = (event.mapObject.title.replace(/ /g, '')).toLowerCase();
     if (getMyFav=="unitedstates") {
         getMyFav="usa2";
          var updatedDataProvider = {
			            "map": ""+ getMyFav +"Low",
                                "areas": [
      {"id": "US-OR", "value": statesUSA.oregon },
      {"id": "US-TX", "value": statesUSA.texas },
      {"id": "US-NY", "value": statesUSA.newyork }
       ]
			    };
			    // pass data provider to the map object
    map.dataProvider = updatedDataProvider;
   
    map.validateData();
     }
     else if(getMyFav=="italy") {
     var updatedDataProvider = {
			            "map": ""+ getMyFav +"Low",
                               "areas": [
      {"id": "IT-25", "value": statesItaly.lombardia },
      {"id": "IT-82", "value": statesItaly.silicia },
      {"id": "IT-62", "value": statesItaly.lazio }
       ]
			    };
			    // pass data provider to the map object
    map.dataProvider = updatedDataProvider;
   
    map.validateData();
    }
     }
    else {
    //call information page for event.mapObject.title!
  /*  var client = new XMLHttpRequest();
client.open('GET', './assets/Drawable/ammaps/info/hello.txt');
client.onreadystatechange = function() {
  document.getElementById('chartdiv').innerHTML = client.responseText;
}
client.send();

*/

window.location.href = "./sample-region.php";
    }
    }
    }],
    
     "valueLegend": {
    "right": 10,
    "minValue": "little",
    "maxValue": "a lot!"
  },
});

function displayDirect()  {

window.location.href = "./sample-region.php";

}

function backtoearth () {
    earthlike=true;
   
             var updatedDataProvider = {
			            "map": "worldLow",
                                "areas": [
      {"id": "IT", "value": 80 },
      {"id": "US", "value": 50 }
       ]

			    };
			    // pass data provider to the map object
    map.dataProvider = updatedDataProvider;
   
    map.validateData();
    
    var earthBack = new map;
   earthBack.dataProvider = {
			            "map": "worldLow",
                                "areas": [
      {"id": "IT", "value": countriesPercent.italy },
      {"id": "US", "value": countriesPercent.unitedstates }
       ]

			    };
   earthBack.validateData();
}


function updateMapFilter () {
    var vye = 0;
    while(vye == 0) {
        var updatedDataProvider = {
			            "map": "worldLow",
                                "areas": [
      {"id": "IT", "value": countriesPercent.italy },
      {"id": "US", "value": countriesPercent.unitedstates }
       ]

			    };
			    // pass data provider to the map object
    map.dataProvider = updatedDataProvider;
   
    map.validateData();

}
}
        </script>





<!-- Google Font "Open Sans" -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">

<script src="//code.jquery.com/jquery-1.12.4.js"></script>  
  
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="/styles/style.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


</head>

<body>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

	<div id="content">
		<div id="filterpanel">
		    <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Filters</h1>
                        <p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
                        
                        <div id="fpreiz_wrapper">
                            <div class="fpreiz">
                                 <button class="accordion">Reiziger 1</button>
                                <div class="panel"><form action="./assets/filleo/debugFrame.php" method="post">
                 <p>Locatie:</p>
                 <select id=locatie name=locatieType>
        <option value=""  selected="selected">-----------</option>
        <option value=0>Strand</option> 
        <option value=40>Bos</option> 
        <option value=130>Bergen</option> 
        </select>

       
<div id="slider-range" ></div>
        
                 <h2>Klimaat</h2>
         
                 <div data-role="rangeslider">
           <label for="temp-min">Gemiddelde temperatuur:</label>
          <input type="range" name="temp-min" id="temp-min" value="20" min="-50" max="50">
         <label for="temp-max">Temperatuur:</label>
          <input type="range" name="temp-max" id="temp-max" value="40" min="-50" max="50">
           </div>
           
            <div data-role="rangeslider">
           <label for="lv-min">Gemiddelde luchtvochtigheid:</label>
          <input type="range" name="lv-min" id="lv-min" value="10" min="0" max="90">
         <label for="lv-max">Luchtvochtigheid:</label>
          <input type="range" name="lv-max" id="lv-max" value="100" min="10" max="100">
           </div>
                 

         <label for="neerslag-max">Maximale neerslag (Gemiddelde in mm):</label>
          <input type="range" name="neerslag-max" id="neerslag-max" value="20" min="0" max="100">
          
           

         <label for="zonkracht-max">Maximale zonkracht:</label>
          <input type="range" name="zonkracht-max" id="zonkracht-max" value="10" min="0" max="10">
          
    </form>
    </div>
                            </div>
                        
                        </div>

                        <button id="add_trav">Reiziger toevoegen</button>

                        <script>

                        var accordions=document.querySelectorAll("button.accordion");

                        for(var i=0;i<accordions.length;i++){
                          accordions[i].onclick=function(){
                            this.classList.toggle("active");
                            this.nextElementSibling.classList.toggle("show");
                          }
                        }
                            
                            $("#add_trav").click(function () {
      $("#fpreiz_wrapper").append('<div class="fpreiz"><button class="accordion">Reiziger</button><div class="panel">Moet nog gefixed worden</div></div>');
                          
                                 accordions=document.querySelectorAll("button.accordion");
                                
                                 for(var i=0;i<accordions.length;i++){
                          accordions[i].onclick=function(){
                            this.classList.toggle("active");
                            this.nextElementSibling.classList.toggle("show");
                          }
                        }
                                
    });

                        </script>

                    </div>
                </div>
            </div>
            <div class="filterpanelButton">
                <button id="toon_res" onclick="updateMapFilter()">Toon Resultaten</button>
            </div>
		</div>
		
		  <div id="rightcontent">
		  <div id="searchbar">
               <!-- <ul> Waarheen:
					<input type="text" class="tekst" name="search" placeholder="Zoeken...">
 					Van: <input type="date" class="tekst" placeholder="Zoeken...">
 					Tot: <input type="date" class="tekst" placeholder="Zoeken...">
 				   <span class="knop"> <button type="button" class="button button1" placeholder="Zoeken...">Zoeken</button></span>
                </ul>-->
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-3">
                          <label for="waarheen">Waarheen</label>
                          <input id="waarheen" type="text" class="tekst" name="search" placeholder="Zoeken...">
                      </div>
                      <div class="col-md-3">
                          <label for="van">Van</label>
                          <input id="van" type="date" class="tekst" placeholder="Zoeken...">
                      </div>
                      <div class="col-md-3">
                          <label for="tot">Tot</label>
                          <input id="tot" type="date" class="tekst" placeholder="Zoeken...">
                      </div>
                      <div class="col-md-3"><button onclick="displayDirect()" class="zoekbutton">Zoekenop</button></div>
                  </div>
              </div>
</div>
		<div id="map">
		 
        <div id="chartdiv" style="width: 100%; background-color:#EEEEEE; height: 500px;"></div>
        <button id="backbutton" onclick="backtoearth()">Back to earth!</button>
		</div>
		</div>
	</div>
</body>
</html>

<?php
require 'bottombar.php';
?>