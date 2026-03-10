<?php

	/**
	* Démonstration des méthodes password_hash() et password_verify() de PHP
	* Permet de sécurisé un mot de passe avec un algo puissant
	* Le hachage retourné contient déjà un grain de sel qui permet de simplifier 
	* la procédure et surtout renforcer la sécurité !
	* DOC :
	* https://www.php.net/manual/fr/function.password-hash.php
	* https://www.php.net/manual/fr/function.password-verify.php
	*/

	$pass = "secret";

	$hash = password_hash($pass, PASSWORD_DEFAULT);

	echo "Mot de passe = <b>". $pass . "</b><br/>";

	echo "Mot de passe haché avec son grain de sel aléatoire. Algo utilisé : bcrypt (défaut) :<br/><br/>";
	
	echo "<b>" . $hash . "</b><br/><br/>";

	echo "On verifie ... <br/>";

	$verif_pass = $pass; //"12345";

	if( password_verify($verif_pass,$hash) ) {
		echo "<li><b>Le mot de passe est valide !</b></li>";
	} else {
		echo "<li><b>Mot de passe est invalide !</b></li>";
	}
	
	echo "<hr/><i>Recharger cette page pour vérifier le résultat du hachage ...</i>";

?>