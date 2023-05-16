<?php
class Movie
{
    public $title;
    public $description;
    public $director;
    public $genre;
    public $year;
    public $thumb;

    function __construct($title, $description, $director, $genre, $year, $thumb)
    {
        $this->title = $title;
        $this->description = $description;
        $this->director = $director;
        $this->genre = $genre;
        $this->year = $year;
        $this->thumb = $thumb;
    }

    
}
