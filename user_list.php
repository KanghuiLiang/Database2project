  <?php
    include_once('index.php');
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User</title>
  <meta charset="utf-8">
</head>
<body>
    <div class="main">
      <div class="row">
      <div class="col-md-9">
  <h2>Employee</h2>
</div>
  <div class="col-md-3">
<h2> <button> <i class="fas fa-plus-square"></i><a href="add_Item.php">Add</a></button></h2>
</div>
  </div>
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
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td></td>
        <td><i class="fas fa-pen"></i>Update
            <i class="fas fa-trash-alt"></i>Delete
        </td>

      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
        <td></td>
        <td><i class="fas fa-pen"></i>Update
          <i class="fas fa-trash-alt"></i>Delete
        </td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
        <td></td>
        <td><i class="fas fa-pen"></i>Update
        <i class="fas fa-trash-alt"></i>Delete
        </td>
      </tr>
    </tbody>
  </table>

</div>

</body>
</html>
