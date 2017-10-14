<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Task</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>TODO</h2>
        <ul>
            {% for task in tasks %}
            <li>{{ task.description }}</li>
            {% endfor %}
        </ul>
        <a href="/create_task"><button class="btn btn-default">Create Task</button></a>
        <form action="/delete_tasks" method="POST">
            <button type="submit" class="btn btn-default">Delete All tasks</button>
        </form>

    </div>
</body>
</html>