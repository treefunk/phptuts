<?php
class Car
{
    public $car_model;
    public $car_price;
    public $car_color;

    function isSimilar($param1){
        if(strpos(strtolower($this->car_model),strtolower($param1)) !== false)
            return true;
    }

}

$contents = file_get_contents("cars_sample.json");
$cars = json_decode($contents);


$allCars = [];
foreach($cars as $car){
    $carObj = new Car;
    $carObj->car_model = $car->car;
    $carObj->car_price = $car->price;
    $carObj->car_color = $car->color;
    $allCars[] = $carObj;
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search Car</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
</head>
<body>
    <div class="container">
        <h2>Search Car:</h2>
        <form action="">
            <div class="form-group"><label for="carsearch">Search car:</label><input type="text" name="carsearch" class="form-control" id="carsearch"></div>
            <button class="btn" type="submit" name="scar">Search</button>
        </form>
        <div class="well">
        <ul>
            <?php
                foreach($allCars as $car)
                {
                    if($car->isSimilar($_GET['carsearch'])){
                        echo "<li>$car->car_model</li>";
                    }
                }
            ?>
        </ul>
        </div>
    </div>
</body>
</html>