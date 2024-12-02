<?php

class Musicien {
    private string $nom;
    private string $prenom;
    private array $instruments;

    public function __construct(string $nom, string $prenom, array $instruments = []) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->instruments = $instruments;
    }



    public function sePresente(): string {
        $presentation = "Nom : {$this->nom}, Prénom : {$this->prenom}<br>";
        $presentation .= "Instruments : " . implode(', ', $this->instruments) . "<br>";
        return $presentation;
    }



    public function listeInstruments(): array {
        return $this->instruments;
    }



    public function modifierInstrument(string $ancienInstrument, string $nouvelInstrument): void {
        $key = array_search($ancienInstrument, $this->instruments);
        if ($key !== false) {
            $this->instruments[$key] = $nouvelInstrument;
        }
    }

    

    public function getNom(): string {
        return $this->nom;
    }
}
