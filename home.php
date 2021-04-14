<!DOCTYPE HTML>
                    <?php
                    session_start();
                    ?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="home.css"></link>
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
        <link rel="manifest" href="/manifest.json">
        <style>
.dropdown {
 
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  z-index: 5;
   right:0;
  
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
            	hintarr.forEach(function(item){
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
		function showHintCam(str) {
		var datalist=document.getElementById("cam-datalist");
    	if (str.length == 0) {
        	document.getElementById("cam-datalist").innerHTML = "";
        return;
    	} else {
        	var xmlhttp = new XMLHttpRequest();
        	xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            	document.getElementById("cam-datalist").innerHTML = "";
            	var hints=this.responseText;
            	var hintarr = hints.split(" ");
            	hintarr.forEach(function(item) {
                var opt=document.createElement('option');
                opt.value=item;
                datalist.appendChild(opt);
            	});
            }
        };
        xmlhttp.open("GET", "ajax2.php?q=" + str, true);
        xmlhttp.send();
    }
}
		</script>
	<script type="text/javascript">
			function validate(){
				if(document.changepassForm.pass.value == "" ){
					alert("Please enter Old Password!");
					document.loginForm.pass.focus();
					return false;
				}
				else if(document.changepassForm.newPass.value == "" ){
					alert("Please enter New Password!");
					document.loginForm.newPass.focus();
					return false;
				}
				else if(document.changepassForm.newPass.value.length< 7){
					alert("Password should have minimum length of 7!");
					document.loginForm.newPass.focus();
					return false;
				}
				else if(document.changepassForm.newPassC.value == "" ){
					alert("Please enter New Password twice!");
					document.loginForm.newPassC.focus();
					return false;
				}
				else if(document.changepassForm.newPassC.value.length< 7){
					alert("Password should have minimum length of 7!");
					document.loginForm.newPassC.focus();
					return false;
				}
				else if(document.changepassForm.newPassC.value != document.changepassForm.newPass.value){
					alert("Please enter correct new password");
					document.loginForm.newPassC.focus();
					return false;
				}
				else{
				return (true);				
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
	<script>
		function change(){
			var res = document.getElementById('id1');
			res.style.display="block";
		}
	</script>
	<script>
		function lenspage(){
			var res = document.search_bar1.search_lens.value();
			
		}
	</script>

	</head>
	<body>
		<header>
		<div>
			<div class="header1">
				<img src="css/final1.png" alt="logo" style="width:250px;height:80px;padding-left:20px;padding-top:5px">
				<br><br><br>
				
				<p>Your Guide To Camera Lenses</p>
			</div>
			<div class="header">
                <div class="header2 dropdown fa fa-bars">
                <div class="dropdown-content">
                    <a style="font-size:25px;">
                        <?php 
                        if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
                        echo $_SESSION['username'];
                        echo '<br><button onclick="change()" class="btn3 btn4">Change password</button><form onsubmit="return(deactivate1());" action="deactivate.php" method="POST"><br><button class="btn3 btn4">De-activate account</button></form>
<form action="logout.php" method="POST"><br><button class="btn3 btn4">Logout</button></form>';
                        } else { echo "<a href='login.html'>LOGIN</a>"; } ?>
                            
                    </a><br>
                    
                </div>     
            </div>
			<!-- header section -->
			
			<div class="header2 linkage"><a href="feedback.html">FEEDBACK</a></div>
			<div class="header2 linkage"><a href="about.html">ABOUT</a></div>
			
            
			</div>
		</div>
		</header>
		<br><br><br>

		<div class="transparent">
			<div id="idz">
				<div id="id1" class="modal animate" style="display:none;">
				<span onclick="document.getElementById('id1').style.display='none'" class="close" title="Close">&times;</span>
				<div class="inner-modal">
					<div class="login">
						<h3>Change Password</h3>
					</div>
					<br><br>
					
					<div class="login_content">
					<form onsubmit="return(validate());" name="changepassForm" action="changePass.php" method="post">
					<label style="padding-left:30%;">Password<br>
					<input type="password" name="pass" pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{7,}" required></label><br><br>
					
					<label style="padding-left:30%;">New Password<br>
					<input type="password" name="newPass" id="password" pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{7,}" required></label><br><br>
					
					<label style="padding-left:30%;">Confirm New Password<br>
					<input type="password" name="newPassC" id="password1" pattern="(?=.*\d)(?=.[a-z])(?=.*[A-Z]).{7,}" required></label><br><br>
					<input class="btn1 btn" type="submit" name="Change" value="change">
					</form>
					
					</div>
					
				</div>
				</div>
			</div>
		</div>
		<script>
			var modal=document.getElementById('id1');
			var bg1=document.getElementById('id0');
			window.onclick=function(event){
				if(event.target == modal){
					modal.style.display="none";
				}
			}
		</script>

		<!-- first search bar -->
		<div class="search1" >
            <form onsubmit="lenspage()" name="search_bar1" method="post" action="lenspage.php">
	    <input type="text" placeholder="Search Your Lens" list="lens-datalist" id="search_lens" name="search_lens" onkeyup="showHint(this.value)">
            <datalist id="lens-datalist"></datalist><button style="border:none;border-radius:50%;background-color:white;"><img src="css/find.png" height="32px" width="32px"></button>
            </form>
		</div>
   
         
        
		<!-- line1 -->
		<div class="line1">
			<h2 align="center">Select Your Camera System</h2>
	    </div>
	    <br><br><br>
		<!-- select camera system -->

		<div class="content1">
            <div class="container">
            <a href="canon.html"><img border="0" alt="cam1" src="css/cam1.jpg" width="150" height="150" class="image5" ></a>
            <div class="middle">
            <div class="text">Canon</div>
            </div>
            </div>

            <div class="container">
             <a href="sony.html"><img border="0" alt="cam1" src="css/cam2.jpg" width="150" height="150" class="image6" ></a>
            <div class="middle">
            <div class="text">Sony</div>
            </div>
            </div>

            <div class="container">
            <a href="fujifilm.html"><img border="0" alt="cam1" src="css/cam3.jpg" width="150" height="150" class="image7" ></a>
            <div class="middle">
            <div class="text">Fujifilm</div>
            </div>
            </div>

            <div class="container">
            <a href="nikon.html"><img border="0" alt="cam1" src="css/cam4.jpg" width="150" height="150" class="image8" ></a>
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
	    <form name="search_bar2" method="post" action="campage.php">
            <input type="text" align="center" placeholder="Search Your Camera" list="cam-datalist" id="search_cam" name="search_cam" onkeyup="showHintCam(this.value)">
	    <datalist id="cam-datalist"></datalist><button style="border:none;border-radius:50%;background-color:white;"><img src="css/find.png" height="32px" width="32px"></button>
            </form>
	</div>
        <br><br><br>
	    <br><br><br>

        <!-- line2 -->
		<div class="line1">
			<h2 align="center" style="font-size:25px;">Tell Us What Type Of Photography You Are Interested In</h2>
	    </div>
	    <br><br><br>
	    

	    <!-- types of photography -->
		<div class="gallery">
          		<div class="row1">
			<a href="street.html"><div class="col1 contain1"><img src="css/street.jpg" width="200px" height="150px" class="imgType"><div class="mid"><div class="text1">Street</div></div></div></a>
			<a href="astro.html"><div class="col2 contain1"><img src="css/astro.jpg" width="300px" height="200px" class="imgType"><div class="mid"><div class="text1">Astro</div></div></div></a>
			<a href="fashion.html"><div class="col3 contain1"><img src="css/fashion.jpg" width="170px" height="120px" class="imgType"><div class="mid"><div class="text1">Fashion</div></div></div></a>			
		</div>
		<div class="row2">
			<a href="event.html"><div class="col4 contain1"><img src="css/event.jpg" height="200px" width="200px" class="imgType"><div class="mid"><div class="text1">Event</div></div></div></a>
			<a href="portrait.html"><div class="col5 contain1"><img src="css/portrait.jpg" height="200px" width="300px" class="imgType"><div class="mid"><div class="text1">Portrait</div></div></div></a>
			<a href="macro.html"><div class="col6 contain1"><img src="css/cheap-macro-photography-tips.jpg" height="200px" width="350px" class="imgType"><div class="mid"><div class="text1">Macro</div></div></div></a>			
		</div>
		<div class="row3">
			<a href="wildlife.html"><div class="col7 contain1"><img src="css/wildlife.jpg" height="200px" width="300px" class="imgType"><div class="mid"><div class="text1">Wildlife</div></div></div></a>
			<a href="sport.html"><div class="col8 contain1"><img src="css/sport.jpg" height="150px" width="200px" class="imgType"><div class="mid"><div class="text1">Sports</div></div></div></a>
			
			
		</div>
	</div>
     <br><br><br>
    
    <div class="line1">
			<h2 align="center" style="font-size:25px;">Learn More About Lenses From Our YouTube Channel</h2>
	    </div>
	    <br><br><br>

    <div class="playbutton">
        <a href="https://www.youtube.com/channel/UCEtF1gB7LSWTsY8k5r4xoWA?view_as=subscriber" style="padding-left:10px;position: absolute;left:39%;z-index:2;top:370%;"><img src="css/ytbutton.jpg" height="50px" width="70px"></a>
         	
    	<img src="css/lensdoodle1.png" width="1250px" height="460px" align="center" style="position:relative;z-index:1;">
    </div>
    <br><br><br>
    <br><br><br>
    
  
         

        <br><br><br>
        <br><br><br>
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

			<a href="https://www.facebook.com/jason.mendes.98" class="fa fa-facebook"></a>
			<a href="https://www.instagram.com/jason_s_mendes/" class="fa fa-instagram"></a>
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
            latt = 19.243355; 
            long = 72.855690; 
            var lattlong = new google.maps.LatLng(latt, long); 
            var OPTions = { 
                center: lattlong, 
                zoom: 17, 
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