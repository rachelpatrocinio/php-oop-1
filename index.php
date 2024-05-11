<?php
require_once __DIR__ . '/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PRODUCTIONS</title>
</head>
<body class="body">
    <?php include __DIR__ .'/partials/header.php'?>

    <main class="main-content pt-3 pb-5">
        <div class="container">
            <div class="row">
                <ul class="d-flex flex-wrap">
                <?php
                foreach($productions as $production){
                ?>
                    <li class="col-lg-3 col-md-6 col-12 p-3">
                        <div class="card p-3">
                            <h4><?php echo $production->title;?></h4>
                            <p><?php echo $production->language;?></p>
                            <p><?php echo $production->vote;?></p>
                            <p><?php echo $production->genre->name;?></p>
                            <p><?php echo $production->genre->description;?></p>
                        </div>
                    </li>
                    <?php
                    }
                    foreach($movies as $movie){
                    ?>
                    <li class="col-lg-3 col-md-6 col-12 p-3">
                        <div class="card p-3">
                            <h4><?php echo $movie->title;?></h4>
                            <p><?php echo $movie->language;?></p>
                            <p><?php echo $movie->vote;?></p>
                            <p><?php echo $movie->genre->name;?></p>
                            <p><?php echo $movie->genre->description;?></p>
                            <p><?php echo $movie->profits;?></p>
                            <p><?php echo $movie->duration;?></p>
                        </div>
                    </li>
                    <?php    
                    }
                    foreach($tv_series as $tv_serie){
                    ?>
                    <li class="col-lg-3 col-md-6 col-12 p-3">
                        <div class="card p-3">
                            <h4><?php echo $tv_serie->title?></h4>
                            <p><?php echo $tv_serie->language;?></p>
                            <p><?php echo $tv_serie->vote;?></p>
                            <p><?php echo $tv_serie->genre->name;?></p>
                            <p><?php echo $tv_serie->genre->description;?></p>
                            <p><?php echo $tv_serie->seasons;?></p>
                        </div>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </main>

    <?php include __DIR__ .'/partials/footer.php'?>
</body>
</html>