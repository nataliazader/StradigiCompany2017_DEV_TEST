<?php

namespace App\Models;

use PDO;

class Images extends \Core\Model
{
    public static function getAllImages()
    {
    
        try {
            //$db = static::getDB();

            //$images = $db->query('SELECT image FROM images');
            //$results = $images->fetchAll(PDO::FETCH_ASSOC);
			
			$images = array();
			for($i=1;$i<13;$i++)
				$images[$i]=$i;
            //return $results;
            return $images;
			
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}
