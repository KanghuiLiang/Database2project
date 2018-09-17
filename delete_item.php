<?php
include('connection.php'); 
$item = $_GET['item'];
echo "$item";
$sql ="DELETE FROM test.item WHERE item = '$item'";
if($conn->query($sql)){
	// echo "$item is deleted.";
    header ("Location: Stock.php");
}else{
    // echo "Error: " . $sql . "<br>" . $conn->error;
    header ("Location: Stock.php");
}
$conn->close();
?>