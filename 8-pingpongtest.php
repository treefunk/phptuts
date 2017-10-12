<?php
    function pingPong($sze){
        $sze = intval($sze);
        $result = [];
        for($x = 0; $x < $sze ; $x++){
            if($x == 0)
                $result[] = $x;
            else if($x % 3 == 0 && $x % 5 == 0) 
                $result[] = "ping-pong";
            else if($x % 3 == 0)
                $result[] = "ping";
            else if($x % 5 == 0)
                $result[] = "pong";
            else
                $result[] = $x;
        }
        return $result;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PingPong</title>
</head>
<body>
    <form action="">
        <div class="form-group">
        <label for="number">Number:</label>
        <input type="text" class="text-control" name="number">
        <button class="btn" name="pingpongform">Submit</button>   
        </div>
    </form>
    <?php
        if(isset($_GET['pingpongform'])){
            $ar = pingPong($_GET['number']);
            foreach($ar as $val){
                echo $val."<br>";
            }
        }
    ?>
</body>
</html>