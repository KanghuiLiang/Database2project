  <?php
    include_once('index.php');
    include('connection.php');
    ?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock</title>
  <meta charset="utf-8">
</head>
<body>
    <div class="main">
      <div class="row">
      <div class="col-md-9">
  <h2>Stock on Hand</h2>
</div>
  <div class="col-md-3">
<h2> <button> <i class="fas fa-plus-square"></i><a href="add_Item.php">Add Item</a></button></h2>
</div>
  </div>
  <form action="Stock.php" method ="get">
<table class="table table-striped">
    <thead>
      <tr>
        <th>ITEM</th>
        <th>DETAIL</th>
        <th>Price</th>
        <th>SIZE</th>
        <th>Action</th>
      </tr>
      </thead>
  <?php
    $sql = "SELECT * FROM item";
    $result = $conn->query($sql);

    if($result -> num_rows>0){
      while($row = $result -> fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row['item'].'</td>';
        echo '<td>'.$row['Detail'].'</td>';
        echo '<td>'.$row['Price'].'</td>';
        echo '<td>'.$row['Size'].'</td>';
        echo "<td><a href='edit_item.php?item=".$row['item']."'><i class='fas fa-pen'></i>Update</a></td>";
        echo "<td><a href='delete_item.php?item=".$row['item']."'><i class='fas fa-trash-alt'></i>Delete</a></td>";
        echo '</tr>';
      }
    }

    $conn->close();
  ?>


</table>

</body>
</html>
