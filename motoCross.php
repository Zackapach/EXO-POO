<?php 

require_once __DIR__ . '/vehicule.php';
require_once __DIR__ . '/moto.php';

final class motocross extends moto{
    private string $suspension;

    public function __construct(string $marque, string $modele, int $annee, string $typeGuidon, string $suspension)
    {
        parent::__construct($marque, $modele, $annee, $typeGuidon);
        $this->suspension = $suspension;
    }
    public function faireWheelie(): string{
        return '';
    }
    public function sauter():int{
        return '';
    }
}