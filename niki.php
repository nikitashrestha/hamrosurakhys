<?php

// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once __DIR__.'/twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Main";
$email="sthashristi";

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "AC884774e62333aca0ce11623f22fc860e";
$token = "138bf116fd23893a29049f0b3ec97b13";


try 
  {
	        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	      
	        $stmt = $conn->prepare("SELECT *  FROM UrgentNew WHERE Email=:var");
	        $stmt->bindParam(':var', $email);
	        $stmt->execute();
	        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	        $result=$stmt->fetchAll();
	       	$Phonenumber="+9779862657569";
			$client = new Client($sid, $token);
			try
				{
					$client->messages->create(
					$Phonenumber, // to number 
					array(
					'from' => '+17622521114', //twilio phone number 
					'body' => "Emergency [service] has been (dispatched). We are there for you.\n HamroSurakshya "
					)
					);
					echo 'Confirmation is sent.';

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