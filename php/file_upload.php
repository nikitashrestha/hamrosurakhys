<?php

require'db-connect.php';

if($conn)
{
	$title = $_POST['title'];
	$image = $_POST['image'];
	$a = $_POST['subject'];
	$w = $_POST['contact'];
	//$file = base64_decode($image);


	$upload_path = "uploads/$title.jpg";

	$sql = "INSERT INTO nikitaimages(ImageName,ImagePath) VALUES ('$title','$upload_path')";

	if(mysqli_query($conn,$sql))
	{
		file_put_contents($upload_path, base64_decode($image));

		echo json_encode(array('response'=>"image Uploaded Successfully..."));
	}
	else
	{
		echo json_encode(array('response'=>"image not uploaded..."));
	}

	mysqli_close($conn);
}
?>