<?php

interface GroupeDeMusiqueInterface {
    public function afficher();
    public function addMusicien($musicien);
    public function modifierInstrumentMusicien($nom, $ancienInstrument, $nouvelInstrument);
    public function supprimerMusicien($nom);
}
