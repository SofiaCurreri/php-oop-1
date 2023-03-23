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
    public $genre;
    public $director;

    public function __construct(
        string $_title,
        int $_year,
        string $_poster,
        string $_genre,
        string $_director = "unknown",
    ){
      $this -> setTitle($_title); 
      $this -> setYear($_year); 
      $this -> setPoster($_poster);
      $this -> setGenre($_genre);
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

    public function setGenre($genre) {
      if(!is_string($genre) || $genre === "") return false;
      $this ->genre = $genre;
    }

    public function setDirector($director) {
      if(!is_string($director) || $director === "") return false;
      $this ->director = $director;
    }

}

?>