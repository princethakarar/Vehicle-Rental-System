<?php
    function connect()
    {
        $c = new mysqli("localhost", "root", "", "vrs");

        if($c)
            return $c;
        else
            mysqli_error($c);
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
?>