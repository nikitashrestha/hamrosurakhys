<?php 
// include database connection 
include "db_connect.php"; 
 
// select the image 
$query = "select * from userimages WHERE Subject = ?"; 
$stmt = $con->prepare( $query );
 
// bind the id of the image you want to select
$stmt->bindParam(1, $_GET['Subject']);
$stmt->execute();
 
// to verify if a record is found
$num = $stmt->rowCount();
 
if( $num ){
    // if found
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // specify header with content type,
    // you can do header("Content-type: image/jpg"); for jpg,
    // header("Content-type: image/gif"); for gif, etc.
    header("Content-type: uploads/jpg");
    
    //display the image data
    print $row['Image'];
    exit;
}else{
    //if no image found with the given id,
    //load/query your default image here
    print"No imahe";
}
?>