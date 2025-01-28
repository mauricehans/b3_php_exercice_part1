<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée Person avec des propriétés first_name, last_name et age en protected.
 * Ajouter un conctructeur
 * Ajouter les getters et setters
 * Implémentez une methode afficheInfos() pour afficher les informations de la personne.
 * Créer un nouvel objet et afficher les information
 */
class Person{
    protected string $first_name;
    protected string $last_name;
    protected int $age;

    public function __construct($first_name,$last_name,$age){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    public function afficheInfos(): string{
        return $this->first_name . " " . $this->last_name . ", " . $this->age . " ans";
    }
}
$maurice = new Person("maurice","hans",12);
echo $maurice->afficheInfos();

