<?php
    header("content-type:text/html");
	$servername = "localhost";
    $user = "root";
    $pass = "";
    $Email="sthashristi777@gmail";
    try
    {
      $conn = new PDO("mysql:host=$servername;dbname=Main", $user, $pass); //connection to database already here
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);// set the PDO error mode to exception
    }
    catch(PDOException $e)
    {
      echo "Connection failed: " . $e->getMessage();
    }
    try
    {
	    $stmt = $conn->prepare("SELECT * FROM nikitaimages WHERE Email=:var");
        $stmt->bindParam(':var', $Email);
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $result=$stmt->fetchAll();
        echo $result[1]["ImagePath"];    
    }
   
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
    $conn=null;

?>