<?php 

require_once __DIR__ . '/vehicule.php';
require_once __DIR__ . '/moto.php';

final class Scooter extends Moto{
    private int $capaciteStockage;

    public function __construct(string $marque, string $modele, int $annee, string $typeGuidon, int $capaciteStockage)
    {
        parent::__construct($marque,  $modele,  $annee, $typeGuidon);
        $this->capaciteStockage = $capaciteStockage;
    }
    public function faireWheelie(): string{
        return '';
    }
    public function rangements(): array{
        return [
            'capaciteStockage' => $this->capaciteStockage,
        ];
    }
}