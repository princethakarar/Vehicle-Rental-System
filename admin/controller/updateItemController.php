<?php
    include_once "../config/dbconnect.php";

    $Id= $_POST['product_id'];
    $name = $_POST['p_name'];
    $brand = $_POST['p_brand'];
    $model = $_POST['p_model'];
    $category = $_POST['category'];
    $color = $_POST['p_color'];
    $safe = $_POST['p_safe'];
    $fuel = $_POST['p_fuel'];
    $price = $_POST['p_price'];
    // var category = $('#category').val();
    // var existingImage = $('#existingImage').val();
    // var newImage = $('#newImage')[0].files[0];
    // var color = $('#p_color').val();
    // var safe = $('#p_safe').val();
    // var fuel = $('#p_fuel').val();
    // var price = $('#p_price').val();

    if(isset($_FILES['newImage']) ){
        
        $location="./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
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
        path='$final_image' 
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