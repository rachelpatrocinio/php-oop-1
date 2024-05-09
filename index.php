<?php

class Production {
    public $title;
    public $language;
    public $vote;
    
    function __construct(string $_title,string $_language,int $_vote){
        $this->title = $_title;
        $this->language = $_language;
        $this->vote = $_vote;
    }
}

$avatar = new Production('Avatar', 'English', 9);
var_dump($avatar);

$titanic = new Production('Titanic','English',10);
var_dump($titanic);
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