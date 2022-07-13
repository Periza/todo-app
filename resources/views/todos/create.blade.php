<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos</title>
</head>
<body>
    <h2>Create a new todo</h2>

    <form action="/todos/create" method="post">
        @csrf
        <input type="text" name="title">
        <input type="submit" value="Create">
    </form>
</body>
</html>