<?php echo'
<header>
	<h1 id="slide"></h1>
	<div class="dropdown show" id="dropdown">
		<button type="button dropdown-toggle" class="btn btn-outline-dark" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dark</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="map.php">Log Out</a>
			<a class="dropdown-item" href="#">Review Crime Data</a>
		</div>
	</div>
</header>

<div class="row" id="Body">
<div class="col-3" id="left">
	<div class="row" >
		<div class="col" id="Photo"></div>
	</div>
	<div class="row">
		<div class="col"> Username: </div>
		<div class="col" id="Name"> </div>
	</div>
	<div class="row" >
		<div class="col"> UserContact: </div>
		<div class="col" id="PhoneNumber"> </div>
	</div>
	<div class="row" >
		<div class="col"> Address: </div>
		<div class="col" id="Address"> </div>
	</div>
	<div class="row" >
		<div class="col"> Email: </div>
		<div class="col" id="Email"> </div>
	</div>
	<div class="row" >
		<div class="col"> Date Of Birth: </div>
		<div class="col" id="DOB"> </div>
	</div>
	<div class="row" >
		<div class="col"> Gender: </div>
		<div class="col" id="Gender"> </div>
	</div>
	<div class="row">
		<div class="col"> SOS1: </div>
		<div class="col"  id="RelativeOne"> </div>
	</div>
	<div class="row" >
		<div class="col"> SOS2: </div>
		<div class="col" id="RelativeTwo"> </div>
	</div>
</div>
<div class="col-6" id="center">
	<div id="map"></div>
	
    <input id="address" type="text" placeholder="|Enter Address |">
    <input type="button" id="btn" value="Encode" onclick="CodeAddress();" size="30">
     
     
    <input id="latlng" type="text" placeholder="|Enter Lat,Lng |">
    <input type="button" id="btn" value="Decode" onclick="GeocodeLatLng();" size="30">
  	
</div>
<div class="col-3" id="right">
	';
	include 'notification.php';
	echo'
</div>
</div>
	<footer>This is Police Department...</footer>
';
?>