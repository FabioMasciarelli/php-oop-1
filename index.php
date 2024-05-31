<?php
require_once __DIR__ .'/classes/movie.php';
require_once __DIR__ .'/classes/gender.php';


$movie1 = new  Movie('The Wolf Of Wall Street', 120,'Leonardo Di Caprio');
var_dump($movie1);

echo '<hr>';


$movie2 = new Movie('The Lincoln Lawyer', 90, 'Matthew McConaughey');
var_dump($movie2);


