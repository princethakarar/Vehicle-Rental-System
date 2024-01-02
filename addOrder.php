<?php
    include_once "admin/config/dbconnect.php"; 

    $Id=$_POST['Id'];
    $userName=$_POST['userName'];
    $location=$_POST['location'];
    $address=$_POST['address'];
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

    if($pickDate == $returnDate)
    {
        $price = $_POST['price'];
    }

    $select = mysqli_query($conn,"SELECT Id FROM user WHERE name = '$userName'");

    $n = mysqli_num_rows($select);

    $row = mysqli_fetch_assoc($select);

    $insert = mysqli_query($conn,"INSERT INTO orders
    (username, user_id,carname,brand,price,location,address,pickdate,returndate,car_img,card_num,holder,expiration_month,expiration_year,cvv)
    VALUES('$userName', '$row[Id]','$carName','$brand',$price,'$location','$address','$pickDate','$returnDate','$carImg','$card_num','$card_hol','$expire_mo','$expire_year',md5($cvv))");

    if($insert and $insert2)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>