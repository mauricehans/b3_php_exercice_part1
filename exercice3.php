<?php

/**
 * ÉNONCÉ :
 * Importer le fichier de l'exercice2 pour avoir accès à la classe Person
 * Écrivez une classe nommée Employee qui hérite de la classe Person
 * et ajoute les propriétés salary et position.
 * Surchager le constructeur et appeler le constructeur parent
 * Surcharger la méthode afficheInfos() pour afficher le salaire et le poste
 * En dessous la classe instancier un objet et afficher les infos
 */
require_once 'exercice2.php';
class Employee extends Person {
    protected float $salary; 
    protected string $position;

    public function __construct($first_name, $last_name, $age, $salary, $position) {
        parent::__construct($first_name, $last_name, $age); 
        $this->salary = $salary;
        $this->position = $position;
    }

    public function afficheInfos(): string {
        return " Salaire " . $this->salary . " Poste  " . $this->position;
    }
}

$loui = new Employee("loui", "duChamp", 85, 1000, "cadre");

echo $loui->afficheInfos();

