<?php
require 'db-connect.php';
if($conn)
{
	$sendNum = $_POST['contact'];
	$meesgae = $_POST['message'];
	$message = nl2br($meesgae);
	$lat =" ";
	$lon =" ";


	for($i=0;$i<strlen($meesgae);$i++)
	{
		if($meesgae[$i]==',')
		{
			while($meesgae[$i]!="\n")
			{
				$lat=$lat.$meesgae[$i+1];
				$i++;
			}
			while($meesgae[$i]!=',')
			{
				$i++;
			}
			if($meesgae[$i]==',')
			{
				while ($meesgae[$i]!="\n") {
					$lon=$lon.$meesgae[$i+1];
					$i++;
				}
			}
			
		}
	}

	if(strlen($sendNum)>10)
	{
		$sql = "INSERT INTO usermessages(Contact,Message,Latitude,Longitude) VALUES ('$sendNum','$meesgae','$lat','$lon')";

	if(mysqli_query($conn,$sql))
	{
	

		echo json_encode(array('response'=>"Message inserted in db successfully..."));
	}
	else
	{
		echo json_encode(array('response'=>"Message not inserted..."));
	}

	}
	
	

	mysqli_close($conn);
}
?>