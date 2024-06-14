<?php

require_once __DIR__ . '/vehicule.php';

abstract class Moto extends Vehicule {

    protected string $typeGuidon;

    public function __construct(string $marque, string $modele, int $annee, string $typeGuidon){
        parent::__construct( $marque,  $modele,  $annee,);
        $this->typeGuidon = $typeGuidon;
    }

    abstract public function faireWheelie(): string;
    
    public function demarrer(): string {
        return "La voiture démarre.";
    }

    public function arreter(): string {
        return "La voiture s'arrête.";
    }

    public function afficherDetails(): string {
        return "Marque: " . $this->getMarque() . ", Modèle: " . $this->getModele() . ", Année: " . $this->getAnnee();
    }

}