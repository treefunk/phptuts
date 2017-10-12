<?php
$icecreamFlavors = ["chocolate", "strawberry", "vanilla"];
$movies = ["3 idiots","the dark knight","Lord of the Rings"];
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Arrays</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>


<body>
    <div class="container">
    <h1>Original Arrays:</h1>
        <h2>Icecream flavors:</h2>
        <div class="well">
            <ul>
                <?php
                    for($x = 0; $x < count($icecreamFlavors); $x++){
                        echo "<li>".$icecreamFlavors[$x]."</li>";
                    }
                ?>
            </ul>
        </div>
        <h2>Favorite movies:</h2>
        <div class="well">
            <ul>
                <?php
                    foreach($movies as $movie){
                        echo "<li>".$movie."</li>";
                    }
                ?>
            </ul>
        </div>

        <!-- manipulated arrays -->
        <?php
            array_splice($icecreamFlavors,1,1);
            $movies[] = "newmovie1";
            array_push($movies,"newmovie2");
        ?>
        <h1>manipulated Arrays:</h1>
        <h2>Icecream flavors:</h2>
        <div class="well">
            <ul>
                <?php
                    for($x = 0; $x < count($icecreamFlavors); $x++){
                        echo "<li>".$icecreamFlavors[$x]."</li>";
                    }
                ?>
            </ul>
        </div>
        <h2>Favorite movies:</h2>
        <div class="well">
            <ul>
                <?php
                    foreach($movies as $movie){
                        echo "<li>".$movie."</li>";
                    }
                ?>
            </ul>
        </div>
    </div> <!-- end of container -->
</body>
</html>