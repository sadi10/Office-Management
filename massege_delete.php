<?php
require_once "connection.php"; 
// $id = $_GET['id'];
$sql = "DELETE FROM userinbox ORDER BY time DESC";
if(mysqli_query($conn, $sql)){
    echo "Records were deleted successfully.";
    header("Location: admininbox.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>
