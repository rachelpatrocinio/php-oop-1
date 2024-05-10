<?php

require_once __DIR__ . '/models/production.php';

$productions = [
    new Production('Avatar', 'English', 9, new Genre('Fantasy','Good')),
    new Production('Titanic','English',10, new Genre('Drama','Good'))
];