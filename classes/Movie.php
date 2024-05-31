<?php

require_once 'Genre.php';
require_once 'Actor.php';

class Movie {
    private string $title;
    private int $year;
    private Genre $genre;
    private array $cast = [];
}
?>