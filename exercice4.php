<?php

/**
 * ÉNONCÉ
 * Créez une classe Article ayant les propriétés 
 * title (titre)
 * content (contenu)
 * Implémentez une méthode getSummary($maxLength) qui retourne les premiers $maxLength caractères 
 * du contenu, suivis de « … » si le contenu est trop long.
 * En dessous la classe instancier un objet et afficher les infos

 */
class Article{
    protected string $title;
    protected string $content;
    public function __construct($title,$content){
        $this->title = $title;
        $this->content = $content;
    }
    public function getSummary($maxLength): string{
        if(strlen($this->content) > $maxLength){
            return substr($this->content, 0, $maxLength) . '...';
        }
        return $this->content;
    }




}
$produit = new Article('titre','contenu');
echo $produit->getSummary(5);
echo '<br>';
echo $produit->getSummary(10);