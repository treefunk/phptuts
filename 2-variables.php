<?php
    $friend_name = "Brendan";
    $sender_name = "Jhondee";
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variables</title>
</head>
<body>
    <h1>Greetings From Afar</h1>
    <p>Dear <?php echo $friend_name; ?>,</p>
    <p>How are you? I hope that you are having a nice weekend. I'm vacationing in the mountains of Tibet while I learn programming! </p>
    <p><?php echo $friend_name; ?>, you would; not believe how cold it is here. I should have gone to Hawaii instead. But I like programming a lot, so I've got that going for me. </p>
    <p>Looking forward to seeing you soon, I'll bring you back a souvenir. </p>
    <p>Cheers,</p>
    <p><?php echo $sender_name ?></p>
</body>
</html>