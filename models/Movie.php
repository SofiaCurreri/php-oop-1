<?php 

require_once __DIR__ . "/Genre.php";

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

?>