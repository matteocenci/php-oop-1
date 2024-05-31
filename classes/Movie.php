<?php

require_once 'Genre.php';
require_once 'Actor.php';

class Movie {
    private string $title;
    private int $year;
    private Genre $genre;
    private array $cast = [];

    public function __construct(string $title, int $year, Genre $genre) {
        $this->title = $title;
        $this->year = $year;
        $this->genre = $genre;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function setTitle(string $title) {
        $this->title = $title;        
    }

    public function getYear(): int {
        return $this-> year;
    }

    public function setYear(int $year) {
        $this->year = $year;
    }

    public function getGenre(): Genre {
        return $this->genre;
    }

    public function setGenre(Genre $genre) {
        $this->genre = $genre;
    }

    public function getCast(): array {
        return $this->cast;
    }

    public function addActor(Actor $actor) {
        $this->cast[] = $actor;
    }

    
}
?>