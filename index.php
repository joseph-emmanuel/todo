<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>To Do</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link  href="css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="list">
        <h1 class="header"> To do</h1>
        <ul class="items">
            <li><span class="item">Pick up shopping</span>
                <a href="#" class="done-button"> Mark as done</a>
            </li>
            <li><span class="item-done">Learn php</span></li>
        </ul>
        <form class="item-add" action="add.php" method="post">
            <input type="text" name="name" placeholder="type a new item here" class="input" autocomplete="off" required>
            <input type="submit" value="Add" class="submit">
        </form>
    </div>
</body>
</html>