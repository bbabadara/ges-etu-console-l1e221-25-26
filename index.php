<?php
$etudiants = [
    ["nom"=>"Ndiaye","prenom"=>"Fatou","classe"=>"L1Dev"],
    ["nom"=>"Diop","prenom"=>"Moustapha","classe"=>"L1Dev"]
];

do {
    echo "\n1. Ajouter un etudiant\n";
    echo "2. Lister les etudiant\n";
    echo "3. Lister les etudiants d'une classe\n";
    echo "4. Quitter\n";
    $choix = readline("Entrer votre choix: ");
    switch ($choix) {
        case '1':
            echo "Vous avez choisi ajout \n";
            break;
        case '2':
            echo "Vous avez choisi lister \n";
            break;
        case '3':
            echo "Vous avez choisi liste d'une classe \n";
            break;
        case '4':
            echo "Au revoir!";
            break;
        
        default:
            echo "choix invalide\n";
            break;
    }
} while ($choix != 4);
