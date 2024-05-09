<?php
require_once __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTIONS</title>
</head>
<body>
    <ul>
        <li>
            <h4><?php echo $avatar->title;?></h4>
            <p><?php echo $avatar->language;?></p>
            <p><?php echo $avatar->vote;?></p>
        </li>
        <li>
            <h4><?php echo $titanic->title;?></h4>
            <p><?php echo $titanic->language;?></p>
            <p><?php echo $titanic->vote;?></p>
        </li>
    </ul>
</body>
</html>