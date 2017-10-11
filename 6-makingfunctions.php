<?php
function calculateShippingCost($distance,$weight){
    return ($distance/$weight) + 5;
}

function calculateSquare($num){
    return $num*$num;
}

function enkrip($phrase){
    $words = explode(' ',trim($phrase));
    $words[0] = strrev($words[0]);
    $words[1] = strtoupper($words[1]);
    $words[2] = strrev(strtoupper($words[2]));
    $words = implode(' ',$words);
    return $words;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Making functions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Calculate Shipping Cost</h2>
        <form action="">
            <div class="form-group">
                <label for="distance">Distance:</label>
                <input type="text" class="form-control" name="distance">
            </div>

            <div class="form-group">
                <label for="weight">Weight:</label>
                <input type="text" class="form-control" name="weight">
            </div>
            <button name="shippingcost" class="btn" type="submit">calculate shipping cost</button>
        </form>
        <b>Shipping Cost:</b>
        <?php
        if(isset($_GET['shippingcost'])){
            echo calculateShippingCost($_GET['distance'],$_GET['weight']);
        }
        ?>
        <h2>Calculate square</h2>
        <form action="">
            <div class="form-group">
                <label for="number">Number:</label>
                <input type="text" name="number" id="number">
                <button type="submit" class="btn" name="square">calculate square</button>
            </div>
        </form>
        <b>Original: <?= $_GET['number'] ?></b>
        <b>Squared:
        <?php
            if(isset($_GET['number']) && $num = $_GET['number']){
                echo calculateSquare($num);
            }
        ?>
        </b>
        <h2>Encryptor</h2>
        <form action="">
            <div class="form-group">
                <textarea class="form-control" name="phrase">

                </textarea>
            </div>
            <button name="encrypt" type="submit" class="btn">
            encrypt
            </button>
        </form>
        <b>Original: </b><?=$_GET['phrase']?><br>
        <b>Encrypted:</b>
        <?php
        if(isset($_GET['encrypt']) && $p = $_GET['phrase']){
            echo enkrip($p);
        }
        ?>
    </div> <!-- end of container -->
</body>
</html>