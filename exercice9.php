<?php

/**
 * ÉNONCÉ:
 * Créez une classe Movie avec les propriétés 
 * title, genre et ageRestriction. 
 * Ajoutez une méthode canWatch($viewerAge) qui retourne true 
 * si l’âge du spectateur ($viewerAge) est supérieur ou égal à ageRestriction, 
 * sinon false.
  * En dessous de la classe, créer un objet et appeler les méthodes
 */

class Movie {
    protected string $title;
    protected string $genre;
    protected int $ageRestriction;

    public function __construct($title, $genre, $ageRestriction) {
        $this->title = $title;
        $this->genre = $genre;
        $this->ageRestriction = $ageRestriction;
    }

    public function canWatch($viewerAge): bool {
        return $viewerAge >= $this->ageRestriction;
    }
}

$movie = new Movie('The Dark Knight', 'Action', 16);
echo $movie->canWatch(15) ? 'Vous pouvez regarder ce film' : 'Vous ne pouvez pas regarder ce film';
echo '<br>';
echo $movie->canWatch(16) ? 'Vous pouvez regarder ce film' : 'Vous ne pouvez pas regarder ce film';
echo '<br>';
echo $movie->canWatch(17) ? 'Vous pouvez regarder ce film' : 'Vous ne pouvez pas regarder ce film';
echo '<br>';
