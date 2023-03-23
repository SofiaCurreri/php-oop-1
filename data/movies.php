<?php 

require_once __DIR__ . "/../models/Movie.php";
require_once __DIR__ . "/../models/Genre.php";

$movies = [
  new Movie(
    "Labyrinth", 
    1986, 
    "https://i0.wp.com/www.my-sf.com/wp-content/uploads/2016/01/Labyrinth-poster.jpeg", 
    [
      new Genre("Fantastico"), 
      new Genre("Avventura")
    ],  
    "Jim Henson"
  ),
  new Movie(
    "La Città Incantata", 
    2001, 
    "https://aforismi.meglio.it/img/film/La_citt%C3%A0_incantata.jpg", 
    [
      new Genre("Animazione"), 
      new Genre("Fantastico")
    ],  
    "Hayao Miyazaki"
  ),
];

?>