<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <title>TP Noté</title>


</head>
<body>
<h1>TP Noté : Groupe B&C - 02/12/2024 à 09h30</h1>

<?php
spl_autoload_register(function ($class_name) {
    $file = __DIR__ . '/' . $class_name . '.php';
    if (file_exists($file)) {
        require $file;
    } else {
        die("Le fichier pour la classe $class_name est introuvable.");
    }
});

?>
<h2>1. Création d'un groupe de théâtre</h2>



<?php
$groupe = new Groupe('Molière & co', 'Théatre');
echo $groupe->afficher();
?>

<h2>2. Création du groupe sans musiciens</h2>

<?php
$groupeMusique = new GroupeDeMusique('Téléphone', 1976, 'rock');
echo $groupeMusique->afficher();

$musicien1 = new Musicien('Bertignac', 'Louis', ['Guitare', 'Basse']);
$musicien2 = new Musicien('Aubert', 'Jean-Louis', ['Aucun']);
$musicien3 = new Musicien('Kolinka', 'Richard', ['Batterie', 'Tambour', 'Piano']);
$musicien4 = new Musicien('Marienneau', 'Corine', ['Basse']);

$groupeMusique->addMusicien($musicien1);
$groupeMusique->addMusicien($musicien2);
$groupeMusique->addMusicien($musicien3);
$groupeMusique->addMusicien($musicien4);
?>


<h2>3. Groupe avec les musiciens</h2>



<?php
echo $groupeMusique->afficher();
?>

<h2>4. Modification des musiciens</h2>



<?php
$groupeMusique->modifierInstrumentMusicien('Aubert', 'Guitare', 'Guimbarde');
echo $groupeMusique->afficher();
?>


<h2>5. Suppression d'un musicien</h2>


<?php
$groupeMusique->supprimerMusicien('Marienneau');
echo $groupeMusique->afficher();
?>


<h2>6. Nombre d'oeuvre</h2>


<?php
echo Oeuvre::getNbOeuvre().' oeuvres ont été crées.';
?>


<h2>7. Modification d'un groupe</h2>


<?php
$groupe->modifierNom('Compagnie Molière');
echo $groupe->afficher();
?>


</body>
</html>
