<?php

// Classe DBRechercher qui hérite de DbConnect
class DBRechercher extends DbConnect {

    // Cherche les utilisateurs dont le prénom correspond à la recherche
    public static function rechercherUser($prenom) {

        $sql = "SELECT prenom, nom FROM `user` WHERE prenom LIKE :prenom";

        $req = self::executerRequete($sql, [':prenom' => '%' . $prenom . '%']);

        $data = $req->fetchAll(PDO::FETCH_ASSOC);

        if (!empty($data)) return $data;
        return [];
    }
}
?>