<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Car.php";

    $app = new Silex\Application();

    $app->get("/cars", function(){
        $contents = file_get_contents("../src/cars_sample.json");
        $cars = json_decode($contents);


        $allCars = [];
        foreach($cars as $car){
            $carObj = new Car;
            $carObj->car_model = $car->car;
            $carObj->car_price = $car->price;
            $carObj->car_color = $car->color;
            $allCars[] = $carObj;
        }

        if(isset($_GET['carsearch'])){
            $output = "";
            foreach($allCars as $car)
            {
                if($car->isSimilar($_GET['carsearch'])){
                    $output = $output . "<li>$car->car_model</li>";
                }
            }
            return $output;
        }

        return '
        <div class="container">
            <h2>Search Car:</h2>
            <form action="">
                <div class="form-group"><label for="carsearch">Search car:</label><input type="text" name="carsearch" class="form-control" id="carsearch"></div>
                <button class="btn" type="submit" name="scar">Search</button>
            </form>
            <div class="well">
            <ul>'.$output. '</ul>
            </div>
        </div>
        ';

    });

    return $app;
?>