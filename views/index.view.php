<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>User</h1>
    <?php foreach ($users as $user): ?>
    <p><?=$user->name?></p>
    <?php endforeach?>
    <form action="name" method="POST">
        <input type="text" name="name">
        <input type="submit" value="submit">
    </form>
    <a href="/about">about>></a>
</body>

</html>