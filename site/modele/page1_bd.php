<?php

// Lecture du fichier JSON ,stockage dans la variable $data
$data = file_get_contents(RACINE. "/modele/data.json");

// Classe DBPage1 qui hérite de DbConnect pour accéder à la base de données
class DBPage1 extends DbConnect {

    // Récupère tous les articles d'une table 

    public static function getArticlesContent($table) {
        
        // Requête SQL pour récupérer tous les enregistrements de la table
        $sql = "select * from $table";
        
        // Exécute requête 
        $req = self::executerRequete($sql);
        
        // Récupére tous les résultats en tableau associatif
        $data = $req->fetchAll(PDO::FETCH_ASSOC);
        
        // Retourne les données si le tableau n'est pas vide
        if(!empty($data)) return $data;
        
    }
}

?>
