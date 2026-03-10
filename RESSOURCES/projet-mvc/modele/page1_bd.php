<?php

	/**
	 *  dao : Page1
	 */

	class DBPage1 extends DbConnect {

		public static function getArticlesContent($table) {
			
			$sql = "select * from $table";
			
			$req = self::executerRequete($sql);
			
			/* Remplacer ??? par la méthode fetchAll() */
			
			// $data = ???
			
			if(!empty($data))return $data;
			
		}
	}

?>