<?php
    require "functions.php";

    if(isset($_POST['brand']))
    {
        $brand = $_POST['brand'];

        if($brand === "")
        {
            $car_details = getAllCars();
        }
        else
        {
            $car_details = getCarsByBrands($brand);
        }
        echo json_encode($car_details);
    }