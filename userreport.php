<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/userreport.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
   	

</head>
<body style="background:linear-gradient(50deg, #8bab9d,#c38261);	">
	<header style="width: 100%;height: 12%;padding: 0;">
		<div class="row" style="border-bottom: 1px solid #304440;">
			<h1 id="slide1" style="color: #f3f3f4;
				padding-top:10px;
				padding-left:30px;
				">Hamro Surakshya,Image Verification
			</h1>
			
			<button type= "button link" class="btn btn-outline-dark" style="float: right;margin-left: 500px;height: 60%;margin-top: 10px;"><a href="map.php" style="color: #161b1c;">Back</a></button>
		</div>
	</header>
	<div class="row" id="whole" >
		<div class="col-3" id="FirstCol">
			<!-- notifications in subject wise-->
			<button id="refreshlist" onclick="Refresh();"> REFRESH</button>
			<?php 
				include 'imageuserlist.php';
			?>
		</div>
		<div  class="col-15" id="SecondCol" style="width: 70%;">
			
			<!-- details of individual  -->
			<div class="col-8" style="width: 35%;float: left;margin-right: 20px;">
				<img id="1" src="#" style="width:600px;height: 500px">
			</div>
			<div class="col-7" style="width: 35%;float: right;">
				<table style="margin-top: 50%;width: 320px;">
					<caption>Detail Information</caption>
				
					<tr>
						<td>
							<h4 id="Subject1"></h4>
						</td>
						<td>
							<h4 id="Subject"></h4>
						</td>
					</tr>
					<tr>
						<td>
							<h4 id="Content1"></h4>
						</td>
						<td>
							<p id="Content"></p>
						</td>		
					</tr>
					<tr>
						<td>
							<h4 id="OneUser1"></h4>
						</td>
						<td>
							<h4 id="OneUser"></h4>
						</td>
					</tr>
				</table>		
			</div>	
		</div>
	</div>

	<footer>This is Police Department...</footer>
	<script type="text/javascript" src="js/imagereport.js"></script>
	<script type="text/javascript" src="js/userreport.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>