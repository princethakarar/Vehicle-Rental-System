<?php
    include_once "../config/dbconnect.php"; 

    $Id=$_POST['Id'];
    $name= $_POST['name'];
    $brand= $_POST['brand'];
    $model= $_POST['model'];
    $category= $_POST['category'];
    $color= $_POST['color'];
    $safe= $_POST['safe'];
    $fuel= $_POST['fuel'];
    $price= $_POST['price'];

    if( isset($_FILES['newImage']) ){

        $location="images/cars/";
        $nm = $_FILES['newImage']['name'];
        $final_image=$location. $nm;

    }else{
        $final_image=$_POST['existingImage'];
    }
    $updateItem = mysqli_query($conn,"UPDATE cars SET 
        name='$name', 
        brand='$brand', 
        model=$model,
        category='$category',
        path='$final_image',
        color='$color',
        safe='$safe',
        fuel='$fuel',
        price=$price
        WHERE Id=$Id");


    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>