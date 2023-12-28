<?php
    include_once "admin/config/dbconnect.php"; 

    $Id=$_POST['Id'];
    $userName=$_POST['userName'];
    $location=$_POST['location'];
    $pickDate=$_POST['pickDate'];
    $returnDate=$_POST['returnDate'];
    $carName=$_POST['carName'];
    $brand=$_POST['brand'];
    $diff = strtotime($returnDate) - strtotime($pickDate);
    $price=$_POST['price'] * (floor($diff / (60 * 60 * 24)) + 1);

    $insert = mysqli_query($conn,"INSERT INTO orders
    (username,carname,brand,price,location,pickdate,returndate)
    VALUES('$userName','$carName','$brand',$price,'$location','$pickDate','$returnDate')");

    if($insert)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>