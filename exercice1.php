<?php
/*
 * ÉNONCÉ :
 * Créer Product avec les propriétés suivantes en protected
 * - name
 * - price_without_tax
 * - vat_rate
 * Ajouter les getters et setters
 * Ajouter une methode getPriceWithVat() qui va retourner le calcul du prix TTC
 * En dessous la classe instancier un produit et afficher les infos
*/
class Product{
    protected string $name;
    protected float $price_without_tax;
    protected float $vat_rate;

    public function __construct(string $name, float $price_without_tax, float $vat_rate){
        $this->name = $name;
        $this->price_without_tax = $price_without_tax;
        $this->vat_rate = $vat_rate;
    }

    public function getName(): string{
        return $this->name;
    }

    public function getPriceWithVat():float{
        return $this->price_without_tax + ($this->price_without_tax * $this->vat_rate / 100);
    }

}

$product_1 = new Product('Iphone 12', 1000, 20);
echo $product_1->getName();
echo '<br>';
echo $product_1->getPriceWithVat();
echo '<br>';
echo '<br>';
$product_2 = new Product('Iphone 12 Pro', 1200, 20);
echo $product_2->getName();
echo '<br>';
echo $product_2->getPriceWithVat();

?>