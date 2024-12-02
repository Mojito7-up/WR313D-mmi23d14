<?php

abstract class Oeuvre {
    protected string $nom;
    private static int $nbOeuvre = 0;


    public function __construct(string $nom) {
        $this->nom = $nom;
        self::$nbOeuvre++;
    }


    public static function getNbOeuvre(): int {
        return self::$nbOeuvre;
    }
    

    public function modifierNom(string $nom): void {
        $this->nom = $nom;
    }
}
