<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    { 
        $Name = $_POST['name'];
        $brand= $_POST['brand'];
        $model = $_POST['model'];
        $category = $_POST['category'];
        $color = $_POST['color'];
        $safe = $_POST['safe'];
        $fuel = $_POST['fuel'];
        $price = $_POST['price'];
       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="images/cars/";
        $image=$location.$name;

        $target_dir="images/cars/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO cars
         (name,brand,model,category,path,color,safe,fuel,price) 
         VALUES ('$Name','$brand',$model,'$category','$image','$color','$safe','$fuel','$price')");
 
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