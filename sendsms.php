<?php

// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once __DIR__.'/twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Main";
$contact='+9779804183965';

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC884774e62333aca0ce11623f22fc860e";
$token = "138bf116fd23893a29049f0b3ec97b13";
$ans="";

try 
  {
	        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	      
	        $stmt = $conn->prepare("SELECT *  FROM usersignup WHERE ContactNumber=:var");
	        $stmt->bindParam(':var', $contact);
	        $stmt->execute();
	        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	        $result=$stmt->fetchAll();
	       	$PhonenumberOne=$contact;
	       	$PhonenumberTwo=$result[0]['RelativeTwo'];
	       	$PhonenumberThree=$result[0]['RelativeOne'];
	 
			$client = new Client($sid, $token);
		
			try
				{
					$client->messages->create(
					$PhonenumberOne, // to number 
					array(
					'from' => '+17622521114', //twilio phone number 
					'body' => "Emergency alert!!! HamroSurakshya "
					)
					);
					$ans.='\n COnfirmation is sent to '.$PhonenumberOne."(User)";

					$client->messages->create(
					$PhonenumberTwo, // to number 
					array(
					'from' => '+17622521114', //twilio phone number 
					'body' => "Emergency alert!!! HamroSurakshya "
					)
					);
					$ans.='\n COnfirmation is sent to '.$PhonenumberTwo."SOS 1";
					
					$client->messages->create(
					$PhonenumberThree, // to number 
					array(
					'from' => '+17622521114', //twilio phone number 
					'body' => "Emergency alert!!! HamroSurakshya "
					)
					);
					$ans.='\n COnfirmation is sent to '.$PhonenumberThree."SOS 2";
					echo json_encode($ans);
					

				}
			catch(ClientException $e)
				{
					echo'Unable to send message. Please check for errors.';
				}
			}
			
    
       
    catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }
$conn = null;
?>