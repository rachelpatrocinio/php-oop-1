<?php

require_once __DIR__ . '/production.php';

class Movie extends Production{
    public $profits;
    public $duration;

    function __construct($_title, $_language, $_vote, $_genre, int $_profits, int $_duration){
        parent::__construct($_title, $_language, $_vote, $_genre);
        $this->profits = $_profits;
        $this->duration = $_duration;
    }
}