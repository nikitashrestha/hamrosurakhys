<?php
require 'db-connect.php';

$name = $_POST['Name'];
$contacts = $_POST['Contact'];
$email = $_POST['Email'];
$address = $_POST['address'];
$gender = $_POST['Gender'];
$contact1= $_POST['SOS1'];
$contact2=$_POST['SOS2'];

if(empty($name)||empty($email)||empty($address)||empty($contact1)||empty($contact2))
{
	echo json_encode(array('response' => "No Fields can be empty"));
	exit();
}else{
	$query = "INSERT INTO usersignup(Username,Contact,Email,Address,Gender,RelativeOne,RelativeTwo) VALUES ('$name','$contacts','$email','$address','$gender','$contact1','$contact2')";

					if(mysqli_query($conn,$query))
					{
							echo json_encode(array('response' => "Successfully added"));
					}

}

mysqli_close($conn);

?>