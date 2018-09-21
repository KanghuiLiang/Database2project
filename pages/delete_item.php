<?php
include('connection.php'); 
$item = $_GET['item'];
$sql ='DELETE FROM item WHERE item = $item';
if($conn->query($sql)){
echo 'ok';
    // header ("Location: Stock.php");
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    // header ("Location: Stock.php");
}
$conn->close();
?>