<?php

/**
 * Classe RechercherController
 * Contrôleur de la page de recherche
 * Gère aussi les requêtes AJAX
 */

class RechercherController {

    public function index() {

        // Chargement de la connexion BDD
        include RACINE . "/controleur/connect.php";

        // Chargement du modèle
        include RACINE . "/modele/rechercher_bd.php";

        // Si c'est une requête AJAX (envoi d'un prénom)
        if (isset($_GET["prenom"])) {

            $prenom = $_GET["prenom"];

            // Récupère les résultats
            $resultats = DBRechercher::rechercherUser($prenom);

            // Retourne les résultats en JSON pour AJAX
            header('Content-Type: application/json');
            echo json_encode($resultats);
            exit();
        }

        // Sinon affiche la page normale
        include RACINE . "/vue/entete.php";
        include RACINE . "/vue/rechercher_vue.php";
        include RACINE . "/vue/pied.php";
    }
}