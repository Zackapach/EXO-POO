<?php 

require_once __DIR__ . '/vehicule.php';

final class voiture extends vehicule {
    private int $nombrePorte;

    public function __construct(string $marque, string $modele, int $annee, int $nombrePorte){
        parent::__construct($marque, $modele, $annee);
        $this->nombrePorte = $nombrePorte;
    }
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