<?php
$server="localhost";
$user="root";
$pass="";
$db="main";
$conn=mysqli_connect($server,$user,$pass,$db);

$name = $_POST['Name'];

$contact = $_POST['Contact'];
$email = $_POST['Email'];
$address = $_POST['address'];
$gender = $_POST['Gender'];
$contact1= $_POST['SOS1'];
$contact2=$_POST['SOS2'];

	$query = "INSERT INTO usersignup(Username,ContactNumber,Email,Address,Gender,RelativeOne,RelativeTwo) VALUES ('$name','$contact','$email','$address','$gender','$contact1','$contact2')";

	if(mysqli_query($conn,$query))
	{
	echo json_encode(array('response' => "Successfully added"));

	}

mysqli_close($conn);


?>