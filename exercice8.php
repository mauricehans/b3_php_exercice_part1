<?php

/**
 * ÉNONCÉ:
 * Créez une classe Student qui étend Person et ayant pour propriétés 
 * - grades (tableau de notes).
 * Ajoutez une méthode getAverage() qui retourne la moyenne des notes. 
 * Implémentez les getters et setters pour manipuler le tableau de notes.
 * En dessous de la classe, créer un objet et appeler les méthodes
 */
require_once 'exercice2.php';
class Student extends Person {
    protected array $grades;

    public function __construct($first_name, $last_name, $age, $grades) {
        parent::__construct($first_name, $last_name, $age);
        $this->grades = $grades;
    }

    public function getAverage(): float {
        return array_sum($this->grades) / count($this->grades);
    }

    public function getGrades(): array {
        return $this->grades;
    }

    public function setGrades($grades): void {
        $this->grades = $grades;
    }
}
$nicolas = new Student("nicolas", "lee", 25, [12, 15, 18, 20]);
echo $nicolas->getAverage();
echo '<br>';
print_r($nicolas->getGrades());
$nicolas->setGrades([10, 15, 20, 20]);
print_r($nicolas->getGrades());
?>
