<?php
    include_once "admin/config/dbconnect.php"; 

    $Id=$_POST['Id'];
    $userName=$_POST['userName'];
    $location=$_POST['location'];
    $pickDate=$_POST['pickDate'];
    $returnDate=$_POST['returnDate'];
    $carName=$_POST['carName'];
    $brand=$_POST['brand'];
    $carImg=$_POST['carImg'];
    $diff = strtotime($returnDate) - strtotime($pickDate);
    $price=$_POST['price'] * (floor($diff / (60 * 60 * 24)));
    $card_num=$_POST['card_num'];
    $card_hol=$_POST['card_hol'];
    $expire_mo=$_POST['expire_mo'];
    $expire_year=$_POST['expire_year'];
    $cvv=$_POST['cvv'];

    $insert = mysqli_query($conn,"INSERT INTO orders
    (username,carname,brand,price,location,pickdate,returndate,car_img)
    VALUES('$userName','$carName','$brand',$price,'$location','$pickDate','$returnDate','$carImg')");

    $insert2 = mysqli_query($conn,"INSERT INTO payment_detail
    (card_num,holder,expiration_month,expiration_year,cvv)
    VALUES('$card_num','$card_hol','$expire_mo','$expire_year','$cvv')");

    if($insert and $insert2)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>