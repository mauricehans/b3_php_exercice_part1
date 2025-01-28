<?php

/**
 * ÉNONCÉ :
 * Écrivez une classe PHP nommée ShoppingCart avec les propriétés 
 * - items (sous forme de tableau)
 * - total.
 * Implémentez une méthode pour ajouter des articles au panier 
 * (chaque article sera dans un tableau avec name et price) 
 * Implémentez une méthode pour afficher tous les items.
 * Implémentez une méthode pour calculer le coût total.
 * En dessous de la classe, créer un objet et appeler vos méthodes
 */


class ShoppingCart {
    // Propriétés de la classe
    protected array $items = []; // Tableau pour stocker les articles
    protected float $total = 0.0; // Total des coûts

    // Méthode pour ajouter un article au panier
    public function addItem(string $name, float $price): void {
        $this->items[] = ['name' => $name, 'price' => $price];
    }

    // Méthode pour afficher tous les articles
    public function displayItems(): void {
        if (empty($this->items)) {
            echo "Le panier est vide";
            return;
        }

        echo "Articles dans le panier :";
        foreach ($this->items as $item) {
            echo  $item['name'] . " : " . number_format($item['price'], 2) . "€";
        }
    }

    // Méthode pour calculer le coût total
    public function calculateTotal(): float {
        $this->total = 0.0; // Réinitialiser le total avant de recalculer
        foreach ($this->items as $item) {
            $this->total += $item['price'];
        }
        return $this->total;
    }
}

// Création d'un objet ShoppingCart
$cart = new ShoppingCart();

// Ajout d'articles au panier
$cart->addItem("Livre", 12.99);
$cart->addItem("Stylo", 1.49);
$cart->addItem("Clavier", 497.59);

// Affichage des articles dans le panier
$cart->displayItems();

// Calcul et affichage du coût total
$total = $cart->calculateTotal();
echo "Coût total : " . number_format($total, 2) . "€";
