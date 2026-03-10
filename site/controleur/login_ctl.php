<?php

/**
 * Classe LoginController
 * Contrôleur de la page de connexion
 */

class LoginController {

    public function index() {

        // Chargement de la connexion BDD
        include RACINE . "/controleur/connect.php";

        // Chargement du modèle
        include RACINE . "/modele/login_bd.php";

        $erreur = "";

        // Si le formulaire est soumis
        if (isset($_POST["email"]) && isset($_POST["password"])) {

            $email    = $_POST["email"];
            $password = $_POST["password"];

            // Étape 1 : cherche l'utilisateur par email
            $user = DBLogin::getUserByEmail($email);

            if ($user == false) {
                $erreur = "Email introuvable.";

            } else {
                // Étape 2 : vérifie le mot de passe
                if (password_verify($password, $user["paswd"])) {

                    //connexion réussie -> on stock la session
                    $_SESSION['user'] = [
                        'nom'    => $user['nom'],
                        'prenom' => $user['prenom']
                    ];

                    // Redirection vers page1
                    header("Location: ?action=page1");
                    exit();

                } else {
                    $erreur = "Mot de passe incorrect.";
                }
            }
        }

        // Chargement des vues
        include RACINE . "/vue/entete.php";
        include RACINE . "/vue/login_vue.php";
        include RACINE . "/vue/pied.php";
    }
}