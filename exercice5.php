<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe nommée Math 
 * Ajouter les méthodes statiques add(), subtract() et multiply().
 * Utilisez ces méthodes pour effectuer des calculs mathématiques sur deux nombres.
 * En dessous de la classe, appeler chaque méthode
 */

 class Math {
        public static function add($a, $b): int {
            return $a + $b;
        }
    
        public static function subtract($a, $b): int {
            return $a - $b;
        }
    
        public static function multiply($a, $b): int {
            return $a * $b;
        }
 }
$x= 10;
$y= 5;
echo Math::add($x, $y); 
echo '<br>';
echo Math::subtract($x, $y);
echo '<br>';
echo Math::multiply($x, $y);