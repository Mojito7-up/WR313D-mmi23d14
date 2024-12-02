<?php

require_once 'Oeuvre.php';

class Groupe extends Oeuvre {
    private string $activite;

    public function __construct(string $nom, string $activite) {
        parent::__construct($nom);
        $this->activite = $activite;
    }

    public function afficher(): string {
        return "Nom : {$this->nom}, Activité : {$this->activite}<br>";
    }
}
