<?php
	

require_once __DIR__.'/vendor/autoload.php'; 
 use Twilio\Rest\Client;
 $sid = "AC884774e62333aca0ce11623f22fc860e";
 $token = "138bf116fd23893a29049f0b3ec97b13";
 $client = new Client($sid, $token);
 $client->messages->create(  "+9779804183965",  array('from' => "+9779804183965",'body' => "Tomorrow's forecast in Financial District, San Francisco is Clear.",'mediaUrl' => "https://climacons.herokuapp.com/clear.png",));
 ?>