<?php

/**
 * Classe Page404Controller
 * Contrôleur de la page 404
 */

class Page404Controller {

    public function index() {
        include RACINE . "/modele/page404_bd.php";  // modèle JSON

        include RACINE . "/vue/entete.php";      // entête + Bootstrap
        include RACINE . "/vue/page404_vue.php"; // contenu
        include RACINE . "/vue/pied.php";        // pied + Bootstrap JS
    }
}