<!DOCTYPE HTML>
					<?php
					session_start();
                    ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/home.css"></link>
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<title>HomePage</title>
		<style>
			header2{float:right;
			margin:10px 20px;}
		</style>
		<link rel="shortcut icon" href="css/aperture_24123.ico">
		<link rel="apple-touch-icon" href="css/aperture_24123.png">
		<link rel="icon" sizes="192x192" href="css/aperture_24123.png">
		<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
.dropdown {
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  width:20%;
  padding:3px;
  z-index: 1;
  right:0;
  box-shadow: 2px 2px 2px grey; 
}

.dropdown:hover .dropdown-content {
  display: block;
}
        </style>
		<style> 
            .gfg { 
                font-size:40px; 
                font-weight:bold; 
                color:#009900; 
                margin-left:20px; 
            } 
            .showmap { 
                margin-left:47%; 
                margin-top:2%;
                margin-bottom:2%;
	
            } 
            p { 
                font-size:20px; 
                margin-left:20px; 
            } 
        </style> 
        <script type="text/javascript">
          function init() {
            // create map and set center and zoom level
            var map = new L.map('mapid');
            map.setView([47.000,-120.554],13);
            
            var mapboxTileUrl = 'PASTE YOUR URL INSIDE THESE SINGLE QUOTES';
            
            L.tileLayer(mapboxTileUrl, {
                attribution: 'Background map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors'
            }).addTo(map);         
          }  
        </script>
        <script>
		function showHint(str) {
		var datalist=document.getElementById("lens-datalist");
    	if (str.length == 0) {
        	document.getElementById("lens-datalist").innerHTML = "";
        return;
    	} else {
        	var xmlhttp = new XMLHttpRequest();
        	xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	document.getElementById("lens-datalist").innerHTML = "";
            	var hints=this.responseText;
            	var hintarr = hints.split(" ");
            	hintarr.forEach(function(item) {
                var opt=document.createElement('option');
                opt.value=item;
                datalist.appendChild(opt);
            	});
            }
        };
        xmlhttp.open("GET", "ajax1.php?q=" + str, true);
        xmlhttp.send();
    }
}
		</script>
	<script>
		function deactivate1(){
			var res = confirm("Do you really want to de-activate your account?");
			if(res==true) {
				return true;
			}
			else{
				var txt="no change";
				return false;
			}
			return false;
		}
	</script>

		

	</head>
	<body>
		<header>
		<div>
			<div class="header1">
				<img src="css/final1.png" alt="logo" style="width:250px;height:80px;">
				<br><br><br>
				
				<p>Your Guide To Camera Lenses</p>
			</div>
			<div class="header">
			<!-- header section -->
			<div class="header2 dropdown fa fa-bars">
                <div class="dropdown-content">
                    <a style="font-size:25px;">
                    	<?php 
                    	if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
                    	echo $_SESSION['username'];
                    	echo '<br><button onclick="changepass()">Change password</button><form onsubmit="return(deactivate1());" action="deactivate.php" method="POST"><br><button>De-activate account</button></form>
<form action="logout.php" method="POST"><br><button>Logout</button></form>';
						} else { echo "<a>LOGIN</a>"; } ?>
                    		
                    </a><br>
                    
                </div>     
            </div>
			<div class="header2 linkage"><a href="#">FEEDBACK</a></div>
			<div class="header2 linkage"><a href="file:///C:/Users/Jason%20Mendes/Desktop/Website/downloads/login.html">LOGIN</a></div>
			<div class="header2 linkage"><a href="#">ABOUT</a></div>
			
            

			</div>
		</div>
		</header>
		<br><br><br>

		<!-- first search bar -->
		<div class="search1" >
            <input type="text" placeholder="Search Your Lens" list="lens-datalist" id="search_lens" onkeyup="showHint(this.value)">
            <datalist id="lens-datalist"></datalist>
        </div>
   
         
        
		<!-- line1 -->
		<div class="line1">
			<h2 align="center">Select your camera system</h2>
	    </div>
	    
		<!-- select camera system -->

		<div class="content1">
            <div class="container">
            <a href="#"><img border="0" alt="cam1" src="css/cam1.jpg" width="150" height="150" class="image5" ></a>
            <div class="middle">
            <div class="text">Canon</div>
            </div>
            </div>

            <div class="container">
             <a href="#"><img border="0" alt="cam1" src="css/cam2.jpg" width="150" height="150" class="image6" ></a>
            <div class="middle">
            <div class="text">Sony</div>
            </div>
            </div>

            <div class="container">
            <a href="#"><img border="0" alt="cam1" src="css/cam3.jpg" width="150" height="150" class="image7" ></a>
            <div class="middle">
            <div class="text">Fujifilm</div>
            </div>
            </div>

            <div class="container">
            <a href="#"><img border="0" alt="cam1" src="css/cam4.jpg" width="150" height="150" class="image8" ></a>
            <div class="middle">
            <div class="text">Nikon</div>
            </div>
            </div>
</div>
        
        
        
	    <br><br><br>

	    <!-- Or -->
	    <div class="or"></div>
	    <br>
         
        <div class="searchbar2">
            <input type="text" align="center" placeholder="Search Your Camera">
        </div>
        <br><br><br>
	    <br><br><br>

        <!-- line2 -->
		<div class="line1">
			<h2 align="center" style="font-size:30px;">Tell Us What Type Of Photography You Are Interested In</h2>
	    </div>
	    <br><br><br>
	    

	    <!-- types of photography -->
		<div class="gallery">
          		<div class="row1">
			<a href="#"><div class="col1 contain1"><img src="css/street.jpg" width="200px" height="150px" class="imgType"><div class="mid"><div class="text1">Street</div></div></div></a>
			<a href="#"><div class="col2 contain1"><img src="css/astro.jpg" width="300px" height="200px" class="imgType"><div class="mid"><div class="text1">Astro</div></div></div></a>
			<a href="#"><div class="col3 contain1"><img src="css/fashion.jpg" width="170px" height="120px" class="imgType"><div class="mid"><div class="text1">Fashion</div></div></div></a>			
		</div>
		<div class="row2">
			<a href="#"><div class="col4 contain1"><img src="css/event.jpg" height="200px" width="200px" class="imgType"><div class="mid"><div class="text1">Event</div></div></div></a>
			<a href="#"><div class="col5 contain1"><img src="css/portrait.jpg" height="200px" width="300px" class="imgType"><div class="mid"><div class="text1">Portrait</div></div></div></a>
			<a href="macro.html"><div class="col6 contain1"><img src="css/cheap-macro-photography-tips.jpg" height="200px" width="350px" class="imgType"><div class="mid"><div class="text1">Macro</div></div></div></a>			
		</div>
		<div class="row3">
			<a href="#"><div class="col7 contain1"><img src="css/wildlife.jpg" height="200px" width="300px" class="imgType"><div class="mid"><div class="text1">Wildlife</div></div></div></a>
			<a href="#"><div class="col8 contain1"><img src="css/sport.jpg" height="150px" width="200px" class="imgType"><div class="mid"><div class="text1">Sports</div></div></div></a>
			
			
		</div>
	</div>
         	


			
		<!-- Bottom of the page for footer and contact information -->

		<div class="bottom" id="abt">
		
			<hr width="90%">
			<div class="bottom_left">
				
				<h3>About Us:</h3>
				Contact Us: 9920353609
			</div>
			<div class="bottom_right">
			<h3>Follow Us on:</h3>
			<!-- adding social media icons -->

			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-instagram"></a>
			</div>
				<button class= "showmap" type="button" onclick="mapfun()"> 
            	Show Map</button> 
        		<div id="demo2" style="width: 96%; height: 10px; display:none; margin-left:2%"> 
              
        		</div> 
		<script>
			function mapfun(){
				var x=document.getElementById("demo2");
				var y=document.getElementById("abt");
				var z=document.getElementsByClassName("showmap");
				if(x.style.display==="none"){
					x.style.display="block";
					z[0].innerHTML="Hide Map";
					getlocation();
					}
				else {
					x.style.display="none";
					y.style.height="230px";	
					z[0].innerHTML="Show Map";
				}
			}
		</script>
        		<script src="https://maps.google.com/maps/api/js?sensor=false"> 
              
        		</script> 
        		<script type="text/javascript"> 
        		function getlocation(){ 
            	if(navigator.geolocation){ 
                	navigator.geolocation.getCurrentPosition(showLoc, errHand); 
            		} 
		var abt,demo;
                		abt=document.getElementById('abt');
		demo=document.getElementById('demo2');
               		demo.style.height="300px";
		abt.style.height="500px"; 
        		} 
        function showLoc(pos){ 
            latt = pos.coords.latitude; 
            long = pos.coords.longitude; 
            var lattlong = new google.maps.LatLng(latt, long); 
            var OPTions = { 
                center: lattlong, 
                zoom: 10, 
                mapTypeControl: true, 
                navigationControlOptions: {style:google.maps.NavigationControlStyle.SMALL} 
            } 
            var mapg = new google.maps.Map(document.getElementById("demo2"), OPTions); 
            var markerg =  
               new google.maps.Marker({position:lattlong, map:mapg, title:"You are here!"}); 
        } 
          
        function errHand(err) { 
            switch(err.code) { 
                case err.PERMISSION_DENIED: 
                    result.innerHTML = "The application doesn't have the permission"  +  
                               "to make use of location services" 
                    break; 
                case err.POSITION_UNAVAILABLE: 
                    result.innerHTML = "The location of the device is uncertain" 
                    break; 
                case err.TIMEOUT: 
                    result.innerHTML = "The request to get user location timed out" 
                    break; 
                case err.UNKNOWN_ERROR: 
                    result.innerHTML = "Time to fetch location information exceeded"+ 
                      "the maximum timeout interval" 
                    break; 
            } 
        } 
        </script>

				
			
			
		</div>
		<footer>
		<div class="footer">
			<center><h4>Copyright &copy; LensFinder.com | All Rights Reserved</h4></center>
		</div>
		</footer>
	
	</body>
</html>