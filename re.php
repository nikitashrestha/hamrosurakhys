<div class="row" >
		<div class="col" id="Photo">
		</div>
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



	<div class="row">
	<div class="col">
	<a href="userreport.php"><input type="button" value="Image Report"></a>
	<input type="button" value="New Message" id="refresh" onclick="Click();">
	</div>
</div>

<div style="background:linear-gradient(50deg, #8bab9d,#c38261);">
    <input id="address" type="text" placeholder="|Enter Address |">
    <input type="button" id="btn" value="Encode" onclick="CodeAddress();" size="30">
     
     
    <input id="latlng" type="text" placeholder="|Enter Lat,Lng |">
    <input type="button" id="btn" value="Decode" onclick="GeocodeLatLng();" size="30">
</div>