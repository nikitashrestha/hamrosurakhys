<html>
<head>

	<title>Image Analysis</title>
	<script type="text/javascript" src="js/userreport.js"></script>
	<link rel="stylesheet" type="text/css" href="css/userreport.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
   
</head>
<body>
	<div class="row" id="whole">
		<div class="col-3" id="FirstCol">
			<!-- notifications in subject wise-->
			<button id="refreshlist"> REFRESH</button>
			<?php 
				include "imageuserlist.php";
			?>
		</div>
		<div class="col-9" id="SecondCol">
			<!-- detail of each -->
			
				<div class="row"><h3 id="Subject"> Subject </h3></div>
				<div class="row">
					<img id="Image"> Image</div>
					<div id="caption"></div>
				<div class="row"><p id="Content"> Content </p></div>
				<p id="OneUser"></p>
			
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

</body>
</html>