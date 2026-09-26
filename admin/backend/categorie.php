<?php

//Faire appel au fichier db dans config

require_once __DIR__ . "/../../config/db.php";

// Faire une fonction pour afficher la liste des catégories
function ListeCategories () {
    //Préparer la requete sql 
    $liste = connexionDB()->prepare('SELECT * FROM categories');
    $liste->execute();
    $resultat = $liste->fetchAll(PDO::FETCH_ASSOC);
    return $resultat;
}