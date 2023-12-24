<?php
    function connect()
    {
        $c = new mysqli("localhost", "root", "", "vrs");

        if($c->connect_errno != 0)
            return $c->connect_error;
        else
            $c->set_charset("utf8mb4");
        return $c;
    }

    function getAllCars()
    {
        $c = connect();

        $cars = $c->query("select * from cars order by rand()");
        
        while($car = $cars->fetch_assoc())
        {
            $car_details[] = $car;
        }
        return $car_details;
    }

    function getCarsByBrand($brand)
    {
        $c = connect();

        $cars = $c->query("select * from cars where brand='$brand'");

        while($car = $cars->fetch_assoc())
        {
            $car_details[] = $car;
        }
        return $car_details;
    }