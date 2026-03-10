<?php

/**
*	Controleur principal  
*/


// Démarrage de la session en tout premier
session_start();


// 1. Chargement de la config (RACINE, BDD)
require __DIR__ . "/cls/config.php";

// 2. Chargement de la classe Route
require RACINE . "/cls/route.php";

// 3. Instanci et lance routage
$route = new Route();
$route->router();

?>