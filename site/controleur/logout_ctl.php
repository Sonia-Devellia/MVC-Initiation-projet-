<?php

/**
 * Classe LogoutController
 * Détruit la session et redirige vers l'accueil
 */

class LogoutController {

    public function index() {
        // Détruit toutes les données de session
        session_destroy();

        // Redirige vers l'accueil
        header("Location: ?action=defaut");
        exit();
    }
}
