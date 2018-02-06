<?php
	$Username=$_POST["Name"];
	$ContactNumber=$_POST["Contact"];
	$Email=$_POST["Email"];
	$Address=$_POST["address"];
	$Gender=$_POST["Gender"];
	$RelativeOne=$_POST["SOS1"];
	$RelativeTwo=$_POST["SOS2"];
	$Password=$_POST["Password"];

	$servername = "localhost";
    $user = "root";
    $pass = "";

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
	    $stmt = $conn->prepare("INSERT INTO UserSignUp (Username,ContactNumber,Email,Address,Gender,RelativeOne,RelativeTwo,Password) VALUES (:var1, :var2, :var3, :var4 , :var5, :var6, :var7, :var8) ");
	    $stmt->bindParam(':var1', $Username);
	    $stmt->bindParam(':var2', $ContactNumber);
	    $stmt->bindParam(':var3', $Email);
	    $stmt->bindParam(':var4', $Address);
	    $stmt->bindParam(':var5', $Gender);
	    $stmt->bindParam(':var6', $RelativeOne);
	    $stmt->bindParam(':var7', $RelativeTwo);
	    $stmt->bindParam(':var8', $Password);
	    $stmt->execute();
	    echo"insertion done";
    }
   
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
    $conn=null;

?>