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
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../images/cars/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir.$image);
        }
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