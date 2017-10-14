<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tamagotchi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
    <form action="/create_tamagotchi" method="POST">
        <div class="form-group">
            <label for="name">Tamagotchi Name:</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button class="btn" type="submit">Create Tamagotchi</button>
    </form>
    <h1>Tamagotchies:</h1>
    <ul>
        {% for tamagotchi in tamagotchies %}
        ------
        ID: {{ tamagotchi.id }}
        <li>{{ tamagotchi.getName}}</li>
        <li>Hunger: {{ tamagotchi.hunger }}</li>
        <li>Attention: {{ tamagotchi.attention }}</li>
        <li>Energy: {{ tamagotchi.energy }}</li>
        ------
        {% endfor %}
    </ul>
</body>
</html>