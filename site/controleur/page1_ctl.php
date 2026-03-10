<?php

/**
 * Classe Page1Controller
 * Contrôleur de la page 1 : gère les articles
 */

class Page1Controller {

    public function index() {
        include RACINE . "/controleur/connect.php";  // connexion BDD
        include RACINE . "/modele/page1_bd.php";      // modèle

        $article = DBPage1::getArticlesContent("article"); // données BDD

        include RACINE . "/vue/entete.php";    // entête + Bootstrap
        include RACINE . "/vue/page1_vue.php"; // contenu
        include RACINE . "/vue/pied.php";      // pied + Bootstrap JS
    }
}