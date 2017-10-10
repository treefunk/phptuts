<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>functions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
<form action="">

<div class="form-group">
    <label for="word">Convert to uppercase:</label>
    <input type="text" name="word" id="word" class="form-control">

    <button type="submit" class="form-control">convert</button>
</div>

<?php
    if(!empty($_GET['word']))
        echo strtoupper($_GET['word'])
?>

</div>


</form>
</body>
</html>