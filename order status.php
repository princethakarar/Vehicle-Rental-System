<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Status</title>
</head>
<body>
<table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Car Name</th>
        <th class="text-center">Brand</th></th>
        <th class="text-center">Price</th>
        <th class="text-center">Location</th>
        <th class="text-center">PickUp Date</th>
        <th class="text-center">Return Date</th>
        <th class="text-center">Car Image</th>
        <th class="text-center">Status</th>
      </tr>
    </thead>
    <?php
        require "admin/config/dbconnect.php";

        session_start();

        $select = mysqli_query($conn,"SELECT Id FROM user WHERE name = '$_SESSION["name"]'");

        if ($select->num_rows > 0) {
    
        $row = mysqli_fetch_assoc($select);

        $id = $row['Id'];

        $sql = "SELECT carname, brand, price, location, pickdate, returndate, car_img, acc_den from orders";
        $result = $conn->query($sql);
        $count = 1;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
        <tr>
        <td><?= $count ?></td>
        <td><?= $row['carname'] ?></td>
        <td><?=$row['brand']?></td>
        <td><?= $row['price'] ?></td>      
        <td><?= $row['location'] ?></td> 
        <td><?= $row['pickdate'] ?></td> 
        <td><?= $row['returndate'] ?></td> 
        <td><img height='100px' src='<?= $row['car_img']?>'></td>
        <td><?= $row['acc_den'] ?></td>  
        </tr>
        <?php $count = $count + 1;}
        }
        }
    ?>
</table>
</body>
</html>