<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Status</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        :root {
          --main-color: #fe5b3d;
          --second-color: #ffac38;
          --third-color : #474fa0;
          --text-color: #444;
          --gradient: linear-gradient(#fe5b3d, #ffac38);
        }

        body{
          padding: 0 10px;
          font-family: 'Poppins', sans-serif;
        }

        table {
          width: 100%;
          border-collapse: collapse;
          border-spacing: 0;
          box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
          border-radius: 12px 12px 0 0;
          margin: 30px 0px;
        }

        td,
        th {
          padding: 10px 16px;
          text-align: center;
        }

        th {
          background-color: #444;
          color: #fafafa;
          font-weight: bold;
        }

        tr {
          width: 100%;
          background-color: #fafafa;
        }

        tr:nth-child(even) {
          background-color: #e0e0e5;
        }

        /* a i{
          font-size: 30px;
          background: red;
          color: #444; 
          padding: 5px;
          border-radius: 50%;
          background: #e0e0e5;
          border: 1px solid #444;
        }

        a i:hover{
          border: 2px solid #444;
        } */
    </style>
</head>
<body>
<!-- <a href="index.php"><i class='bx bx-arrow-back'></i></a> -->
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
        include_once "admin/config/dbconnect.php";

        session_start();

        $name = $_SESSION["name"];

        $stmt = $conn->prepare("SELECT Id FROM user WHERE name = ?");
        $stmt->bind_param("s", $name);  // Bind the variable to the placeholder
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        $id = $row['Id'];

        $sql2 = "SELECT * FROM orders WHERE user_id = $id";
        $result2 = $conn->query($sql2);

        $count = 1;
        if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) { ?>
        <tr>
          <td><?= $count ?></td>
          <td><?=$row2['carname']?></td>
          <td><?= $row2['brand'] ?></td>      
          <td><?= $row2['price'] ?></td> 
          <td><?= $row2['location'] ?></td> 
          <td><?= $row2['pickdate'] ?></td> 
          <td><?= $row2['returndate'] ?></td> 
          <td><img height='100px' src='<?= $row2['car_img']?>'></td>
          <td><?= $row2['acc_den'] ?></td>     
          </tr>
          <?php $count = $count + 1;}
        }
        ?>
      </table>
</table>
</body>
</html>