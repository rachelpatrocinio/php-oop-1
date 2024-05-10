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
    <?php include __DIR__ .'/partials/header.php'?>

    <main>
        <ul>
            <?php
            foreach($productions as $production){
            ?>
            <li>
                <h4><?php echo $production->title;?></h4>
                <p><?php echo $production->language;?></p>
                <p><?php echo $production->vote;?></p>
                <p><?php echo $production->genre->name;?></p>
                <p><?php echo $production->genre->description;?></p>
            </li>
            <?php
            }
            foreach($movies as $movie){
            ?>
            <li>
                <h4><?php echo $movie->title;?></h4>
                <p><?php echo $movie->language;?></p>
                <p><?php echo $movie->vote;?></p>
                <p><?php echo $movie->genre->name;?></p>
                <p><?php echo $movie->genre->description;?></p>
                <p><?php echo $movie->profits;?></p>
                <p><?php echo $movie->duration;?></p>
            </li>
            <?php    
            }
            ?>

        </ul>
    </main>

    <?php include __DIR__ .'/partials/footer.php'?>
</body>
</html>