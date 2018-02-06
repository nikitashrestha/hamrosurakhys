 <?php
header("Content-Type: application/json");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Main";
$contact=$_GET['contact'];


    try {
            $contact='+'.(string)$contact;
            $contact=str_replace(' ','',$contact);

            /* CONNECT TO THE DATABASE*/
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           

            /* IMPORT URGENCY VALUE OF ROW FOR WHICH EMAIL IS GIVEN*/
            $stmt = $conn->prepare("UPDATE usermessages SET Urgency=1 WHERE Contact=:var");
            $stmt->bindParam(':var', $contact);
            $stmt->execute();
         
            /*CHECK IS UNSET OR NOT*/
            $stmt = $conn->prepare("SELECT * FROM usermessages WHERE Contact=:var");
            $stmt->bindParam(':var', $contact);
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result=$stmt->fetchAll();
            echo json_encode($result[0]['Urgency']);
    
        }
    catch(PDOException $e)
        {
        echo "Error: " . $e->getMessage();
        }
$conn = null;
?> 