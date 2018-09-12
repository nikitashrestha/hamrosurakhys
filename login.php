
<?php

/*  LOGIN INFO EXTRACT FROM DB*/


    header("Content-Type: application/json");
    $servername = "localhost";
    $username = "root";
    $password = "";
    $email=$_GET['email'];
    try
    {
      $conn = new PDO("mysql:host=$servername;dbname=hamrosurakshya", $username, $password); //connection to database already here
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// set the PDO error mode to exception
    }
    catch(PDOException $e)
    {
      echo "Connection failed: " . $e->getMessage();
    }
    $stmt = $conn->prepare("SELECT * FROM signup WHERE Email=:var");
    $stmt->bindParam(':var', $email);
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
