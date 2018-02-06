<?php

$servername="localhost";
$user="root";
$pass="";
$db="Main";
$conn=mysqli_connect($servername,$user,$pass,$db);


if($conn)
{
	$title = $_POST['title']; //image ko naam
	$subject=$_POST['subject'];
	$content=$_POST['context'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$image=$_POST['image']; //image nai ho
	//$file = base64_decode($image);

	if(isset($_POST["submit"]))
	{
		$upload_path = "uploads/".$title.".jpg"; // create path to store the image

		$sql = "INSERT INTO NikitaImages(Email, ImageName, ImagePath, Contact, Subject, Content, Urgency) VALUES ('$email','$title','$upload_path','$contact','$subject','$content',1)";

		if(mysqli_query($conn,$sql))
		{
		file_put_contents($upload_path, base64_decode($image)); //image lai base64 ma decode garera ani tyo location ma save garne 

		echo json_encode(array('response'=>"image Uploaded Successfully..."));
		}
		else
		{
		echo json_encode(array('response'=>"image not uploaded..."));
		}

		mysqli_close($conn);
	}
	else
	{
		echo "Please submit the form to submit data into the database.";
	}
	
}
?>