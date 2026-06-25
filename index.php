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
           $nom=readline("Enter le nom: ");
           $prenom=readline("Enter le prenom: ");
           $classe=readline("Enter la classe: ");
           $newEtudiant=["nom"=>$nom,"prenom"=>$prenom,"classe"=>$classe];
           $etudiants[]=$newEtudiant;
           echo "$prenom $nom ajouter avec succes";
            break;
        case '2':
            foreach ($etudiants as $etudiant) {
                echo "\n==============\n";
                 echo "Nom : ".$etudiant["nom"]."\n";
                 echo "Prenom : ".$etudiant["prenom"]."\n";
                 echo "Classe : ".$etudiant["classe"]."\n";
                echo "\n==============\n";
            }
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
