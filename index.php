<?php
  class Movie{
    public $title;
    public $director;
    public $running_time;

    function __construct($_title, $_director, $_running_time){
      $this->title = $_title;
      $this->director = $_director;
      $this->running_time = $_running_time;
    }

    public function getTitle(){
      return $this->title;
    }

  }

  $first_movie = new Movie('Back to the Future', 'Robert Zemeckis', '116 minutes');

  $second_movie = new Movie('The Lord of the Rings - The Fellowship of the Ring', 'Peter Jackson', '178 minutes');

  $third_movie = new Movie('Whiplash', 'Damien Chezelle', '105 minutes');

  echo $first_movie->getTitle();
  echo "<br>";
  echo $first_movie->director;
  echo "<br>";
  echo $first_movie->running_time;
  echo "<br>";


  echo $second_movie->getTitle();
  echo "<br>";
  echo $second_movie->director;
  echo "<br>";
  echo $second_movie->running_time;
  echo "<br>";

  echo $third_movie->getTitle();
  echo "<br>";
  echo $third_movie->director;
  echo "<br>";
  echo $third_movie->running_time;
  echo "<br>";
?>
