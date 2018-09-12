<?php
   require'db-connect.php';
  

	$sendNum = $_POST['contact'];
	$mesg = $_POST['message'];
	$message = nl2br($mesg);
	$lat ="";
	$lon ="";
	$lat1="";
	$long1="";

//separating latitude and longitude from message body
for($i=0;$i<strlen($mesg);$i++){
		
		while ($mesg[$i]!=':') {
			
			$i++;
		}
			# code...
		
		if($mesg[$i]==':'){
			while ($mesg[$i]!=',') {
				$lat=$lat.$mesg[$i+1]; 
				$i++;
			}
			
		}

		for($j=0;$j<strlen($lat)-1;$j++){
			$lat1[$j]=$lat[$j];
		}



		while ($mesg[$i]!=':') {
			
			$i++;
		}

		if($mesg[$i]==':'){
			while ($i<strlen($mesg)-1) {
				$lon=$lon.$mesg[$i+1];
				$i++;
			}
		}
}

$long1=floatval($lon);
$lat1=floatval($lat);

//verifying number and inserting data in db
	if(strlen($sendNum)>1)
	{
		
			$sql = "INSERT INTO message(Send_Num,Message,latitude,longitude,urgency) VALUES ('$sendNum','$mesg','$lat1','$long1','1')";
			$query=mysqli_query($conn,$sql);
		if($query)
		{
			echo json_encode(array('response'=>"Message inserted in db successfully..."));
			exit();
		}	
	}
mysqli_close($conn);
?>