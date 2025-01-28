<?php 

/*
 * ÉNONCÉ:
 * Créez une classe BankAccount avec la propriété balance (solde). 
 * Ajoutez des méthodes deposit($amount) pour déposer de l’argent et withdraw($amount) 
 * pour retirer de l’argent (si le solde est suffisant). 
 * Affichez un message lors de chaque opération.
 * En dessous de la classe, créer un objet et appeler les méthodes
*/
class BankAccount {
    protected float $balance;
    public function __construct($balance){
        $this->balance = $balance;
    }
    public function deposit($amount){
        $this->balance += $amount;
        echo "depôt de $amount efectue. nouveau solde : $this->balance";
    }
    public function withdraw($amount){
        if($this->balance >= $amount){
            $this->balance -= $amount;
            echo "retrai de $amount effectuerr. nouveau solde : $this->balance";
        }else{
            echo "fonds insuffisants pour effectuer le retrait";
        }
    }
}
$compte = new BankAccount(1000);
$compte->deposit(500);
$compte->withdraw(2000);
$compte->withdraw(500);
?>