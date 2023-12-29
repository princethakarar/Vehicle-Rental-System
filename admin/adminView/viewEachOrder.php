<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>Car Image</th>
            <th>Car Name</th>
        </tr>
    </thead>
    <?php
        include_once "../config/dbconnect.php";
        $Id= $_GET['id'];
        //echo $ID;
        $sql="SELECT car_img,carname from orders where Id=$Id";
        $result=$conn-> query($sql);
        if ($result->num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
    ?>
                <tr>
                    <td><img height="80px" src='../<?= $row['car_img']?>'></td>
                    <td><?=$row["carname"]?></td>
                </tr>
    <?php
            }
        }else{
            echo "error";
        }
    ?>
</table>
</div>
