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