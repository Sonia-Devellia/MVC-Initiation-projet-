<?php

// Lecture du fichier JSON
$data = file_get_contents(RACINE . "/modele/data.json");

// Classe DBLogin qui hérite de DbConnect
class DBLogin extends DbConnect {

    // Cherche par email
    public static function getUserByEmail($email) {

        $sql = "SELECT * FROM `user` WHERE email = :email";

        $req = self::executerRequete($sql, [':email' => $email]);

        $user = $req->fetch(PDO::FETCH_ASSOC);

        // Retourne l'utilisateur ou false si non trouvé
        if (!empty($user)) return $user;
        return false;
    }
}
?>