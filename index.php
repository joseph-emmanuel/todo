<?php
require_once 'app/init.php';
$itemsQuery=$db->prepare("select id, name, done from items where user=:user");
$itemsQuery->execute(['user'=>$_SESSION['user_id']]);
$items=$itemsQuery->rowCount()?$itemsQuery:[];
//foreach ($items as $item) {
//    echo $item['name'],'<br>';
//
//}
?>
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
        <?php if (!empty($items)):?>
        <ul class="items">
            <?php foreach ($items as $item):?>
            <li><span class="item<?php echo $item['done']?'done':'' ?>"><?php echo $item['name']; ?></span>
                <?php if (!$item['done']):?>
                <a href="mark.php?as=done&item=<?php echo $item['id']; ?>" class="done-button"> Mark as done</a>
                <?php else:?>
                    <a href="mark.php?as=notdone&item=<?php echo $item['id']; ?>" class="done-button"> Mark as not done</a>
                <?php endif;  ?>
            </li>
            <?php endforeach;?>
        </ul>
        <?php else:?>
        <p>You haven't added any items yet</p>
        <?php endif;?>
        <form class="item-add" action="add.php" method="post">
            <input type="text" name="name" placeholder="type a new item here" class="input" autocomplete="off" required>
            <input type="submit" value="Add" class="submit">
        </form>
    </div>
</body>
</html>