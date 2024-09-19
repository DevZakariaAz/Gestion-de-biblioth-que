<?php
// Définition de la classe
class NomDeLaClasse {
    // Attributs (propriétés)
    public $attribut1;
    
    // Constructeur
    public function __construct($valeur) 
    {
        $this->attribut1 = $valeur;
    }
    
    // Méthodes
    public function afficher()
    {
        echo $this->attribut1;
    }
}

// Création d'un objet
$objet = new NomDeLaClasse("Valeur");

// Utilisation de la méthode
$objet->afficher();
?>
