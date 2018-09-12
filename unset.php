 <?php
header("Content-Type: application/json");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hamrosurakshya";
$contact=$_GET['ContactNumber'];


    try {
            $contact='+'.(string)$contact;
            $contact=str_replace(' ','',$contact);

            /* CONNECT TO THE DATABASE*/
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           

            /* IMPORT URGENCY VALUE OF ROW FOR WHICH EMAIL IS GIVEN*/
            $stmt = $conn->prepare("UPDATE message SET urgency=0 WHERE Send_Num=:var");
            $stmt->bindParam(':var', $contact);
            $stmt->execute();
         
            /*CHECK IS UNSET OR NOT*/
            $stmt = $conn->prepare("SELECT * FROM message WHERE Send_Num=:var");
            $stmt->bindParam(':var', $contact);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
            echo json_encode($result[0]['urgency']);
    
        }
    catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }
$conn = null;
?> 