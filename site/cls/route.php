<?php
/**
 * Classe Route
 * Gère le routage et instancie le bon contrôleur
 */

class Route {

    public $action;

    public function __construct() {
        // Récupère l'action GET, "defaut" si aucune action transmise
        $this->action = $_GET["action"] ?? "defaut";
    }

    public function router() {

        switch ($this->action) {

            case "defaut":
                // Instancie  le contrôleur d'accueil
                require RACINE . "/controleur/intro_ctl.php";
                $ctrl = new IntroController();
                $ctrl->index();
                break;

            case "page1":
                //  page1
                require RACINE . "/controleur/page1_ctl.php";
                $ctrl = new Page1Controller();
                $ctrl->index();
                break;

            case "page2":
                require RACINE . "/controleur/page2_ctl.php";
                $ctrl = new Page2Controller();
                $ctrl->index();
                break;
            
            case "login":
                require RACINE . "/controleur/login_ctl.php";
                $ctrl = new LoginController();
                $ctrl->index();
                break;

            case "logout":
                require RACINE . "/controleur/logout_ctl.php";
                $ctrl = new LogoutController();
                $ctrl->index();
                break;

            default:
                // contrôleur 404
                require RACINE . "/controleur/page404_ctl.php";
                $ctrl = new Page404Controller();
                $ctrl->index();
                break;
        }
    }
}
?>