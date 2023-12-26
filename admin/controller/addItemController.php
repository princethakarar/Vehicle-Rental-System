<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {       
        $name = $_POST['p_name'];
        $brand = $_POST['p_brand'];
        $model = $_POST['p_model'];
        $category = $_POST['category'];
        $color = $_POST['p_color'];
        $safe = $_POST['p_safe'];
        $fuel = $_POST['p_fuel'];
        $price = $_POST['p_price'];
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO cars
         (name, brand, model, category, path, color, safe, fuel, price) 
         VALUES ('$name', '$brand', $model, '$category', '$image', '$color', '$safe', '$fuel, $price')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>