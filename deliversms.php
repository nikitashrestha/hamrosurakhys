<?php
header("Content-Type:application/json");
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once __DIR__.'/twilio-php-master/Twilio/autoload.php'; // Loads the library
use Twilio\Rest\Client;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hamrosurakshya";
$contact=$_GET['contact'];

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACf5c3ddb7ef74d619ad41ca197129dd77";
$token = "1a3dbf16f2b3528da53fa1962c8ede4f";

try 
  {
  			$contact='+'.(string)$contact;
			$contact=str_replace(' ','',$contact);

	        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	        $stmt = $conn->prepare("SELECT * FROM signup WHERE ContactNumber=:var");
	        $stmt->bindParam(':var', $contact);
	        $stmt->execute();
	        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	        $result=$stmt->fetchAll();
	        
	        $One=$result[0]['RelativeOne'];
	        $Two=$result[0]['RelativeTwo'];
			$client = new Client($sid, $token);
			try
				{
					$client->messages->create(
					$contact, // to number 
					array(
					'from' => '+14142065936', //twilio phone number 
					'body' => "From:Hamrosurakshya\nMessage:We have receved your message.Our rescue team will reach you as soon as possible."
					)
					);

					$client->messages->create(
					$One, // to number 
					array(
					'from' => '+14142065936', //twilio phone number 
					'body' => "From:Hamrosurakshya\n Message:Your dear one needs your help, Find him/her as soon as possible.location:http://maps.google.com/?q=27.7172,85.3240 "
					)
					);

					$client->messages->create(
					$Two, // to number 
					array(
					'from' => '+14142065936', //twilio phone number 
					'body' => "From:Hamrosurakshya\nMessage:Your dear one needs your help, Find him/her as soon as possible.location:http://maps.google.com/?q=27.7172,85.3240"
					)
					);
					$ans="Confirmation has been sent to User: ".$contact.", SOS1: ".$One." SOS2: ".$Two;
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