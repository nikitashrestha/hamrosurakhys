<?php

require'db-connect.php';

$name = $_POST['Name'];
$contact = $_POST['Contact'];
$email = $_POST['Email'];
$gender = $_POST['Gender'];
$contact1 = $_POST['SOS1'];
$contact2 = $_POST['SOS2'];
$Address = $_POST['Addr'];
$DOB =date($_POST['Dob']) ;
$image = $_POST['Image'];
$photo=$contact;
$upload_path = "uploads/$photo.jpg";

		if(!preg_match("/^[a-zA-Z]*$/",$name)){
			echo json_encode(array('response' => "Name Must have only characters",'response1' => "FALSE"));
			exit();
		}else{
			if(!preg_match("/^[0-9]*$/",$contact)){
				echo json_encode(array('response' => "ContactMust have only numbers",'response1' => "FALSE"));
				exit();
			}else{
				if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
					echo json_encode(array('response' => "Invalid Email",'response1' => "FALSE"));
					exit();
				}else{
					//verifying if previous user with this contact exist or not
					$sql = "SELECT * FROM signup WHERE ContactNumber='$contact'";
					$res = mysqli_query($conn,$sql);
					$result = mysqli_num_rows($res);
					if($result>0){
						echo json_encode(array('response' => "EContact already exist",'response1' => "FALSE"));
						exit();
					}else{
						if(!preg_match("/^[0-9]*$/", $contact1)){
							 echo json_encode(array('response' => "contact Must have only numbers",'response1' => "FALSE"));
							exit();
						}else{
							//inserting users in db
							file_put_contents($upload_path, base64_decode($image));
							$contact="+977".$contact;
							$contact1="+977".$contact1;
							$contact2="+977".$contact2;
							$sql = "INSERT INTO signup (Username,ContactNumber,Email,Address,Gender,RelativeOne,RelativeTwo,Photo,DOB) VALUES ('$name','$contact','$email','$Address','$gender','$contact1','$contact2','$upload_path','$DOB')";
							$res = mysqli_query($conn,$sql);
							if(!$sql){
								 echo json_encode(array('response' => "Cannot add new user",'response1' => "FALSE"));
							exit();
							}else{
								 echo json_encode(array('response' => "You are Registerd.",'response1' => "TRUE"));
							}

						}
					}
				}
			}

		}

mysqli_close($conn);

?>