<?php
/*  REFRESH THROUGH THE DATABASE */
header("Content-Type: application/json");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $contact=$_GET['contact'];
    $contact='+'.(string)$contact;
    $contact=str_replace(' ','',$contact);
    try
    {
      $conn = new PDO("mysql:host=$servername;dbname=Main", $username, $password); //connection to database already here
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// set the PDO error mode to exception
   }
    catch(PDOException $e)
    {
      echo "Connection failed: " . $e->getMessage();
    }

    $stmt = $conn->prepare("SELECT * FROM usermessages WHERE Urgency=1 LIMIT 7");
    $stmt->execute();
    try
    {
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result=$stmt->fetchAll();    
    echo json_encode($result);
      
  }
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
  $conn=null;
?>
