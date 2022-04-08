<?php
  class movie {
    public $poster;
    public $title;
    public $language;
    public $director;
    public $releaseDate;

    function __construct(string $_poster, string $_title, string $_language, string $_director, string $_releaseDate){
      $this->poster = $_poster;
      $this->title = $_title;
      $this->language = $_language;
      $this->director = $_director;
      $this->releaseDate = $_releaseDate;
    }
  };
?>