<?php
class Parcel{
    private $length;
    private $width;
    private $height;
    private $weight;

    function __construct($l,$w,$h,$wei){
        $this->length = $l;
        $this->width = $w;
        $this->height = $h;
        $this->weight = $wei;
    }

    function volume()
    {
        return $this->length * $this->width * $this->height;
    }

    function shippingCost()
    {
        return $this->volume() * $this->weight;
    }

}

function checkIfNumber($param){
    $n = (float)$param;
    if($n == 0)
        return true;
    return false;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parcel</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
</head>
<body>
  <div class="container">
    <form action="">
        Dimensions:
        <div class="form-group">
            <label for="length">Length:</label>
            <input type="text" name="length" class="form-control">
        </div>
        <div class="form-group">
            <label for="width">Width:</label>
            <input type="text" name="width" class="form-control">
        </div>
        <div class="form-group">
            <label for="height">Height:</label>
            <input type="text" name="height" class="form-control">
        </div>

        <div class="form-group">
            <label for="weight">Weight:</Weight>
            <input type="text" name="weight" class="form-control">
        </div>

        <button class="btn btn-default" type="submit" name="compute">Compute</button>
    </form>
    <?php
    $length = $_GET['length'];
    $width = $_GET['width'];
    $height = $_GET['height'];
    $weight = $_GET['weight'];
    if(empty($length) || empty($width) || empty($height) || empty($weight)){
        echo "Please provide all fields!!";
    }else{
        if(checkIfNumber($length) || checkIfNumber($width) || checkIfNumber($height) || checkIfNumber($weight)){
            echo "please input a valid number!";
        }
        $parcel = new Parcel($length,$width,$height,$weight);
        $vol = $parcel->volume();
        $shippingCost = $parcel->shippingCost();
        echo $result = <<<HTML
        volume = $vol
        Shipping cost = $shippingCost
HTML;
    }
    ?>
  </div> <!-- end of container -->
</body>
</html>