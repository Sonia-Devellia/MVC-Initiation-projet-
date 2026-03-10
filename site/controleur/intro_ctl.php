<?php

/**
 * Classe IntroController
 * Contrôleur de la page d'accueil
 */

class IntroController {

    public function index() {
        include RACINE . "/vue/entete.php";   // entête + Bootstrap
        include RACINE . "/vue/intro_vue.php"; // contenu
        include RACINE . "/vue/pied.php";      // pied + Bootstrap JS
    }
}