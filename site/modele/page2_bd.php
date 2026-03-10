<?php

// Lecture du fichier JSON
$data = file_get_contents(RACINE . "/modele/data.json");

// Classe DBPage2 qui hérite de DbConnect
class DBPage2 extends DbConnect {

    // Récupère le utilisateurs de la table
    public static function getUsers() {

        // cherche dans la table user
        $sql = "SELECT * FROM `user`";

        // Exécute la requête
        $req = self::executerRequete($sql);

        // tableau associatif
        $data = $req->fetchAll(PDO::FETCH_ASSOC);

        // Retourne si non vide
        if (!empty($data)) return $data;
    }
}
?>