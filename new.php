
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/list.css">
</head>
<body>
<script type="text/javascript" src="js/notification.js"></script>
<script type="text/javascript" src="js/new.js"></script>
<header>
	<h1 id="slide">Hamro Surskshya,Lalitpur Branch</h1>
	<div class="dropdown show" id="dropdown">
		<button type="button dropdown-toggle" class="btn btn-outline-dark" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</button>
		<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
			<a class="dropdown-item" href="map.php">Log Out</a>
			<a class="dropdown-item" href="displaychart.php">Review Crime Data</a>
		</div>
	</div>

</header>

<div class="row" id="Body">
<div class="col-3" id="left" style="border:1px solid;">
	<table id="userinfo" style="margin-top: 10px;">
		<tr style="padding:5px;">
			<a id="pho"><img id="ima" src="#" style="width:50px;height: 50px;"></a>
		</tr>
		<tr style="padding: 5px;">
			<td id="Name1" style="padding: 5px;"></td>
			<td id="Name" style="padding-left: 3px;"></td>
		</tr>
		<tr style="padding: 5px;">
			<td id="PhoneNumber1" style="padding: 5px;"></td>
			<td id="PhoneNumber" style="padding-left: 3px;"></td>
		</tr>
		<tr style="padding: 5px;">
			<td id="Address1" style="padding: 5px;"></td>
			<td id="Address" style="padding-left: 3px;"></td>
		</tr>
		<tr style="padding: 5px;">
			<td id="Email1" style="padding: 5px;"></td>
			<td id="Email" style="padding-left: 3px;"></td>
		</tr>
		<tr style="padding: 5px;">
			<td id="DOB1" style="padding: 5px;"></td>
			<td id="DOB" style="padding-left: 3px;"></td>
		</tr>
		<tr style="padding: 5px;">
			<td id="Gender1" style="padding: 5px;"></td>
			<td id="Gender" style="padding-left: 3px;"></td>
		</tr>
		<tr style="padding: 5px;">
			<td id="RelativeOne1" style="padding: 5px;"></td>
			<td id="RelativeOne" style="padding-left: 3px;"></td>
		</tr>
		<tr style="padding: 5px;">
			<td id="RelativeTwo1" style="padding: 5px;"></td>
			<td id="RelativeTwo" style="padding-left: 3px;"></td>
		</tr>
	</table>

	<div style="margin-top: 10px;padding: 10px;">
		<h4 style="margin-left: 25px;">Find Any Location</h4>
    <input id="address" type="text" placeholder="|Enter Address |">
    <input type="button" id="btn" value="Encode" onclick="CodeAddress();" size="35">
     
     
    <input id="latlng" type="text" placeholder="|Enter Lat,Lng |">
    <input type="button" id="btn" value="Decode" onclick="GeocodeLatLng();" size="30">
	</div>
</div>
<div class="col-6" id="center">
	<div id="map"></div>
  	
</div>
<div class="col-3" id="right">
<?php 

	include 'notification.php';

?>	
	

</div>
</div>
	<footer style="margin-top: 100px;">This is Police Department...</footer>
</body>
</html>
