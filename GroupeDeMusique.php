<?php

class GroupeDeMusique extends Groupe implements GroupeDeMusiqueInterface {
    private int $anneeCreation;
    private string $type;
    private array $musiciens = [];


    public function __construct(string $nom, int $anneeCreation, string $type) {
        parent::__construct($nom, 'jouer de la musique');
        $this->anneeCreation = $anneeCreation;
        $this->type = $type;
    }



    public function addMusicien($musicien): void {
        if ($musicien instanceof Musicien) {
            $this->musiciens[] = $musicien;
        }
    }



    public function modifierInstrumentMusicien($nom, $ancienInstrument, $nouvelInstrument): void {
        foreach ($this->musiciens as $musicien) {
            if ($musicien->getNom() === $nom) {
                $musicien->modifierInstrument($ancienInstrument, $nouvelInstrument);
            }
        }
    }


    
    public function supprimerMusicien($nom): void {
        $this->musiciens = array_filter($this->musiciens, fn($musicien) => $musicien->getNom() !== $nom);
    }

    public function afficher(): string {
        $output = parent::afficher();
        $output .= "Année de création : {$this->anneeCreation}, Type : {$this->type}<br>";
        foreach ($this->musiciens as $musicien) {
            $output .= $musicien->sePresente();
        }
        return $output;
    }
}
