<?php

require'db-connect.php';


	$email = $_POST['email'];
	$title = $_POST['title'];
	$subject= $_POST['subject'];
	$image = $_POST['image'];
	$contact= $_POST['contact'];
	//$file = base64_decode($image);
	$upload_path = "uploads/$subject.jpg";

//check for any empty fields
	if(empty($title)||empty($subject)||empty($image)||empty($contact))
	{
	echo json_encode(array('response' => "No Fields can be empty"));
	exit();
	}else{
		//check for letters
	if(!preg_match("/^[a-zA-Z]*$/", $subject))
	{
		echo json_encode(array('response' => "Must have only characters"));
		exit();
	}else{
		//check for letters
			if(!preg_match("/^[0-9]/", $contact))
			{
				echo json_encode(array('response' => "Invalid contact."));
				exit();
			}else{
				$contact="+977".$contact;
				//verifying if contact exist
					$sql = "SELECT * FROM signup WHERE ContactNumber='$contact'";
					$res = mysqli_query($conn,$sql);
					$rescheck = mysqli_num_rows($res);

					if($rescheck>0)
					{
						//inserting data in db
						$query = "INSERT INTO userimage(Subject,Email,Content,Image,ContactNumber,urgency) VALUES ('$subject','$email','$title','$upload_path','$contact','1')";
							if(mysqli_query($conn,$query))
							{
								file_put_contents($upload_path, base64_decode($image));

							echo json_encode(array('response' => "Successfully added",'response1' => "TRUE"));
							}else{
								echo json_encode(array('response'=>"image not uploaded..."));
							}
					}else{
						echo json_encode(array('response' => "User with this econtact doesnot exist."));
						exit();
					}
				}
			}
		}
	
	mysqli_close($conn);

?>