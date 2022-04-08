<?php
  class movie {
    public $poster;
    public $title;
    public $director;
    public $releaseDate;

    function __construct(string $_poster, string $_title, string $_director, string $_releaseDate){
      $this->poster = $_poster;
      $this->title = $_title;
      $this->director = $_director;
      $this->releaseDate = $_releaseDate;
    }
  };
?>