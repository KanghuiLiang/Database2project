
<?php
 include_once("connection.php");
    $sql = "SELECT R.Repair_no AS 'Product Code', R.Repair_Detail As 'Deatiled description' , W.W_Status AS Waranty,
 F.Dept_Store As 'Department Store',C.CusName AS 'Customer Name'
FROM db2foruml.repair_product As R
left Join
waranty As W
on R.waranty_Waranty_ID = W.Waranty_ID
left Join 
repairform as F 
on R.Repair_no =F.Repair_ID
left join 
customer As C
on C.CusID = F.Cus_ID;";
    $result = $conn->query($sql);

    if($result -> num_rows>0){
      while($row = $result -> fetch_assoc()){
        echo '<tr>';
        echo '<td>'.$row['Product Code'].'</td>';
        echo '<td>'.$row['Detailed description'].'</td>';
        echo '<td>'.$row['Waranty'].'</td>';
        echo '<td>'.$row['Department Store'].'</td>';
        echo '<td>'.$row['Customer Name'].'</td>';
        echo '<td>'.$row['Total'].'</td>';
        echo '</tr>';
      }
      
    }else{
      echo $conn->error;
    }
  ?>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Product Code</th>
        <th>Detailed Description</th>
        <th>Waranty</th>
        <th>Department Store</th>
        <th>Customer Name</th>
        <th>Total</th>
      </tr>
      </thead>

</table>