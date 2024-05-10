<?php

require_once __DIR__ . '/models/production.php';
require_once __DIR__ . '/models/movie.php';

$productions = [
    new Production('Avatar', 'English', 9, new Genre('Fantasy','Good')),
    new Production('Titanic','English',10, new Genre('Drama','Good'))
];

$movies = [
    new Movie('Kung Fu Panda', 'English', 7, new Genre('Cartoon', 'Good'), 1000000, 1)
];