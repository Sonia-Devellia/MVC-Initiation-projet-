<?php

/**
 *  Classe principale de l'objet de connexion PDO
 */

abstract class DbConnect {

    private static function connexion() {
        try {
            $dsn = 'mysql:host=' . DB_HOST .';dbname=' . DB_DATABASE;
            $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\'')); 
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            die("<br />Erreur de connexion PDO !");
        }       
    }

    // Exécute une requête SQL éventuellement paramétrée
    // $params = [] permet de passer des paramètres optionnels
    protected static function executerRequete($sql, $params = []) {
        try {
            $query = self::connexion()->prepare($sql);
            $query->execute($params);
            return $query;
        } catch(Exception $e) {
            die($e->getMessage()."<br />Impossible de récupérer les données");
        }
        $query->closeCursor();
        self::connexion()->close();
    }
}