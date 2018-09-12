<?php

/*  LOGIN INFO EXTRACT FROM DB*/


    header("Content-Type: application/json");
    $servername = "localhost";
    $username = "root";
    $password = "";

   $contact= $_GET['ContactNumber'];

    
    try
    {
      $conn = new PDO("mysql:host=$servername;dbname=hamrosurakshya", $username, $password); //connection to database already here
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// set the PDO error mode to exception
    }
    catch(PDOException $e)
    {
      echo "Connection failed: " . $e->getMessage();
    }
    $stmt = $conn->prepare("SELECT * FROM signup WHERE ContactNumber=$contact");
    $stmt->execute();
    try
    {
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $result=$stmt->fetchAll();
      if(empty($result)) 
      {
        echo"empty";
      } 
      else
      {
        echo json_encode($result);
      }
      
    }
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
    $conn=null;
?>
