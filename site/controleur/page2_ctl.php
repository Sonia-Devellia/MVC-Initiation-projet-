<?php

/**
 * Classe Page2Controller
 * Contrôleur de la page 2 : gère les utilisateurs
 */

class Page2Controller {

    public function index() {

        // connexion BDD
        include RACINE . "/controleur/connect.php";

        // Chargement du modèle
        include RACINE . "/modele/page2_bd.php";

       // charge la table
        $users = DBPage2::getUsers();

        // Charge vue
        include RACINE . "/vue/entete.php";
        include RACINE . "/vue/page2_vue.php";
        include RACINE . "/vue/pied.php";
    }
}