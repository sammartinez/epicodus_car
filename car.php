<?php
class Car
{
    private $make_model;
    private $price;
    private $miles;
    private $photo;

    function __construct($make_model, $price, $miles, $photo)
    {
      $this->make_model = $make_model;
      $this->price = $price;
      $this->miles = $miles;
      $this->photo = $photo;
    }
}

$first_car = new Car("2014 Porsche 911", 114991, 7864, "images/porsche.jpg");
$second_car = new Car("2011 Ford F450", 55995, 14241, "images/ford.jpg");
$third_car = new Car("2013 Lexus RX 350", 44700, 20000, "images/lexus.jpg");
$fourth_car = new Car("Mercedes Benz CLS550", 39900, 37979, "images/mercedes.jpg");

$cars = array($first_car, $second_car, $third_car, $fourth_car);

$cars_matching_search = array();
foreach ($cars as $car) {
    if ($car->price < $_GET["price"]) {
        array_push($cars_matching_search, $car);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Your Car Dealership's Homepage</title>
</head>
<body>
    <h1>Your Car Dealership</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                echo "<li> $car->make_model </li>";
                echo "<ul>";
                    echo "<li> $car->price </li>";
                    echo "<li> Miles: $car->miles </li>";
                    echo "<li> <img src= '$car->photo'> </li>";
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>
