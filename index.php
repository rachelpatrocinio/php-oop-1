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
        <?php
        foreach($productions as $production){
        ?>
        <li>
            <h4><?php echo $production->title;?></h4>
            <p><?php echo $production->language;?></p>
            <p><?php echo $production->vote;?></p>
        </li>
        <?php
        }
        ?>
    </ul>
</body>
</html>