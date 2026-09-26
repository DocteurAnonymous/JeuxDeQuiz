<?php

function connexionDB () {

    // Connexion a la base de données mysql 
    $servername = "localhost";      //nom du serveur
    $username = "root";             //nom d'utilisateur du serveur
    $password = "";                 //mot de passe du serveur
    $dbname = "quiz";               //nom de la base de données

    try {
        // Instance de la classe PDO 
        $pdo = new PDO ("mysql:host=$servername;dbname=$dbname",$username,$password);

        // Configurer le mode d'erreur de PDO sur exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    } catch (PDOException $erreur) {
        die("La connexion a la db a échoué : " . $erreur->getMessage());
    }
}

