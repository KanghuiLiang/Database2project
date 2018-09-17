<?php
include('connection.php');

$item = $_POST['item'];
$detail = $_POST['detail'];
$price = $_POST['price'];
$size = $_POST['size'];

$sql = "INSERT INTO item " ."(item, Detail, Price, Size)". "VALUES ('$item','detail','price','size')";

if ($conn->query($sql) === TRUE) {
    echo "item: ". $item. " Detail: " .
		$detail. " " . $price. " " .$size ."<br>";
}else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

