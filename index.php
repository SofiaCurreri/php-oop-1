<?php

//Create un file index.php in cui:
 //- è definita una classe 'Movie'
 //=> all'interno della classe sono dichiarate delle variabili d'istanza
 //=> all'interno della classe è definito un costruttore
 //=> all'interno della classe è definito almeno un metodo
//- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà
//Bonus 1:
//Modificare la classe Movie in modo che accetti piú di un genere.
//Bonus 2:
//Creare un layout completo per stampare a schermo una lista di movies.
//Facciamo attenzione all'organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
//- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
//- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models/
//- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

class Movie {
    public $title;
    public $year;
    public $poster;
    public $genres;
    public $director;

    public function __construct(
        string $_title,
        int $_year,
        string $_poster,
        array $_genres,
        string $_director = "unknown",
    ){
      $this -> setTitle($_title); 
      $this -> setYear($_year); 
      $this -> setPoster($_poster);
      $this -> setGenres($_genres);
      $this -> setDirector($_director);
    }

    public function setTitle($title) {
      if(!is_string($title) || $title === "") return false;
      $this ->title = $title;
    }

    public function setYear($year) {
      if(!is_numeric($year) || $year < 1850 || $year > date("Y")) return false;
      $this ->year = $year;
    }

    public function setPoster($poster) {
      if(!is_string($poster) || $poster === "") return false;
      $this ->poster = $poster;
    }

    public function setGenres($genres) {
      $accepted_genres = [];

      foreach($genres as $genre) {
        if($genre instanceof Genre && is_string($genre->name) && $genre->name !== "") $accepted_genres[] = $genre ;
      }
      $this->genres = $accepted_genres;
    }

    public function setDirector($director) {
      if(!is_string($director) || $director === "") return false;
      $this ->director = $director;
    }

}

class Genre {
  public $name;

  public function __construct($_name)
  {
    $this->name = $_name;
  }
}

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

foreach($movies as $movie) {
  var_dump($movie);
}

?>