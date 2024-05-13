<?php

require_once __DIR__ . '/genre.php';
class Production {
    public $title;
    public $language;
    public $vote;
    public $genre;
    
    function __construct(string $_title,string $_language,int $_vote, Genre $_genre){
        $this->title = $_title;
        $this->language = $_language;
        $this->setVote($_vote);
        $this->genre = $_genre;
    }

    public function setVote($vote){
        $this->vote = $vote;
    }
}