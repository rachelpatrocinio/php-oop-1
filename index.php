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