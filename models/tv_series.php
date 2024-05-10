<?php

require_once __DIR__ . '/production.php';

class TvSeries extends Production  {
    public $seasons;

    function __construct($_title, $_language, $_vote, $_genre,$_seasons){
        parent::__construct($_title, $_language, $_vote, $_genre);
        $this->setSeasons($_seasons);
    }

    // SETTER
    public function setSeasons($_seasons){
        $this->seasons = $_seasons;
    }
}